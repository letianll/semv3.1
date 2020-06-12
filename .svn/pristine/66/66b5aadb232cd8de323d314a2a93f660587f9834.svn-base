<?php
/**
 * 数据库备份
 */
namespace app\core\lib;
use think\Db;
use think\App;
class Backup
{
	private $tables = array();//要备份的数据表
	private $path;//文件保存路径
	private $dbname;//database name;
	private $model;//数据库模型对象

	public function __construct()
	{
        $this->path = ROOT_PATH.'/../backup/';//ROOT_PATH 定义的项目根目录
        // halt($this->path);
		$this->dbname = config('database.database');// database 
		$this->check_path();
		$this->get_tables();
	}

    //下载
    public function doDown($filedirArr){
        //检查文件是否存在   
        $filedir = $this->path.$filedirArr['data'];
        
        if (! file_exists ( $filedir )) {    
            header('HTTP/1.1 404 NOT FOUND');  
        } else {    
            //以只读和二进制模式打开文件   
            $file = fopen ( $filedir, "rb" ); 

            //告诉浏览器这是一个文件流格式的文件    
            Header ( "Content-type: application/octet-stream" ); 
            //请求范围的度量单位  
            Header ( "Accept-Ranges: bytes" );  
            //Content-Length是指定包含于请求或响应中数据的字节长度    
            Header ( "Accept-Length: " . filesize ( $filedir ) );  
            //用来告诉浏览器，文件是可以当做附件被下载，下载后的文件名称为$file_name该变量的值。
            Header ( "Content-Disposition: attachment; filename=" . $filedirArr['data'] );    

            //读取文件内容并直接输出到浏览器
            echo fread ( $file, filesize ( $filedir ) );    
            fclose ( $file ); //打开的时候要进行关闭这个文件
            exit (); 
        }
    }

	//备份方法
	public function backupAll ()
	{
		if( $this->tables )
		{
			$data = $this->genTitle();
			foreach ( $this ->tables as $table )
			{
				//拿相关 create table 数据
				$ctable = $this->get_create_table($table);
				//生成表结构
				$data .= $this->get_table_structure($ctable);
				//表记录
				$data .= $this->get_table_records($table);
			}
            $filename = $this->path . date('Ymd-His') .'.sql';
            file_put_contents($filename, $data);
            return ;
		}
	}
	
	//还原方法  拆分sql语句,  因为之前保存到文件中的语句都是以 ;\r\n 结尾的, 所以... 
	public function restore ($file)
	{
		$filename = $file;
		if( !file_exists($filename) )
		{
			return false;
		}
		$str = fread( $hd = fopen($filename, "rb") , filesize($filename) );
		$sqls = explode(";\r\n", $str);//所以... 这里拆分sql
		if($sqls)
		{
			foreach($sqls as $sql)
			{
				Db::query($sql);//逐条执行
			}
		}
		fclose($hd);
		return true;
	}
	
	//备份文件相关
	public function getFileInfo()
	{
		$temp = array();
		if( is_dir($this->path) )
		{
			$handler = opendir($this->path);
			$num = 0;
			while ( $file = readdir($handler) ){
				if( $file !== '.' && $file !== '..' )
				{
					$filename = $this->path.$file;
					$temp[$num]['name'] = $file;
					$temp[$num]['size'] = ceil(filesize($filename)/1024);
					$temp[$num]['time'] = date("Y-m-d H:i:s" ,filemtime($filename));
					$temp[$num]['path'] = $filename;
					$num ++;
				}
			}
		}
		return $temp;
	}

    //删除违禁词
    public function del($ids){
        $ids_list = explode(',',$ids); 
        if(is_array($ids_list)){
            foreach($ids_list as $v ){
                $file = $this->path.$v;
                $this->delFile($file);               
            }            
            model('Log')->add('delete','删除了数据库：'.$ids);
            return ['status'=>1,'msg'=>'删除成功'];
        }else{
            return ['status'=>0,'msg'=>$this->getError()];
        }        
    }

    //删除文件
	public function delFile ($file)
	{
		if( file_exists($file) )
		{
			return unlink($file);
		}
		return false;
	}
	
	//sql 文件开头部分  可以省略 但 SET FOREIGN_KEY_CHECKS=0 最好有
	private function genTitle()
	{
		$time = date("Y-m-d H:i:s" ,time());
		$str = "/*************************\r\n";
 		$str.= " * {$time} \r\n";
		$str.= " ************************/\r\n";
		$str.= "SET FOREIGN_KEY_CHECKS=0;\r\n";
		return $str;
	}

	private function get_tables ()
	{
		$sql = 'show tables';
		if( $data = Db::query($sql) ) {
			foreach ( $data as $val ) {
				$this->tables[] = $val['Tables_in_'.$this->dbname];
			}
		}
	}

	//返回一个数组, 0=>表名称 ,1=>表结构(Create Table) 
	private function get_create_table ($table)
	{
		$sql = "show create table $table";
		$arr = Db::query($sql);
		return array_values($arr);
	}

	//生成表结构
	private function get_table_structure ($ctable)
	{
		$str  = "-- ----------------------------\r\n";
		$str .= "-- Table structure for `{$ctable[0]['Table']}`\r\n";
		$str .= "-- ----------------------------\r\n";
		$str .= "DROP TABLE IF EXISTS `{$ctable[0]['Table']}`;\r\n".$ctable[0]['Create Table'].";\r\n\r\n";
		return $str;
	}

	//表记录的sql语句拼接  当还原的时候  就是逐条插入记录 到对应的表
	private function get_table_records ($table)
	{
		$sql = "select * from {$table}";
		if( $data = Db::query($sql) ) {
			$str = "-- ----------------------------\r\n";
			$str.= "-- Records of $table \r\n";
			$str.= "-- ----------------------------\r\n";

			foreach ( $data as $val ) {
				if( $val ) {
					//$keyArr = array();
					$valArr = array();
					//这里看情况了,
					foreach ( $val as $k => $v ) {
						//$keyArr[] = "`".$k."`";
						//对单引号和换行符进行一下转义
						$valArr[] = "'".str_replace( array("'","\r\n"), array("\'","\\r\\n"), $v )."'";
					}
					//$keys = implode(', ', $keyArr);
					$values = implode(', ', $valArr);
					$str .= "INSERT INTO `{$table}` VALUES ($values);\r\n";//省略了字段名称
				}
			}
			$str .= "\r\n";
			return $str;
		}
		return '';
	}

	private function check_path ()
	{
		if( !is_dir($this->path) ) {
			mkdir($this->path ,0777 ,true);
		}
	}
}