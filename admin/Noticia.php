<?php

class Noticia {

	protected static $table = 'obec_noticias';
	protected static $images = 'images/noticias/';
	private static $conn;
	protected $pk = 'id';
	public $titulo;
	public $data;
	public $texto;
	public $tipon;
	public $img;


	public static function connect(){
		define('DB_NOME', 'obec_new');
		define('DB_USUARIO', 'root');
		define('DB_SENHA', 'cegov');
		define('DB_HOST', 'localhost');

		$db = mysqli_connect(DB_HOST,DB_USUARIO,DB_SENHA,DB_NOME) or die('Error connecting to MySQL server.');

		self::$conn = $db;
		mysqli_query(self::$conn, 'SET NAMES utf8');
	}

	public static function disconnect(){
		mysqli_close(self::$conn);
	}

	public static function ImageDirectory(){
		return self::$images;
	}

	public static function find($id){
		// select * from $table where id = $id
		self::connect();
		$query = "SELECT * FROM ".self::$table." WHERE id = ".$id;
		$result = mysqli_query(self::$conn, $query);
		$obj = mysqli_fetch_object($result, 'Noticia');
		self::disconnect();
		return ($obj == false) ? NULL : $obj;
	}

	public static function all(){
		self::connect();
		$query = "SELECT * FROM ".self::$table." ORDER BY id DESC";
		$result = mysqli_query(self::$conn, $query);
		$allObjects = array();
		while($obj = mysqli_fetch_object($result, 'Noticia')){
			$allObjects[] = $obj;
		}
		self::disconnect();
		return $allObjects;
	} 

	public static function news($limite, $offsetTeste){
		self::connect();
		$query = "SELECT * FROM ".self::$table." ORDER BY id DESC LIMIT ".$limite." OFFSET ".$offsetTeste;
		$result = mysqli_query(self::$conn, $query);
		$allObjects = array();
		while($obj = mysqli_fetch_object($result, 'Noticia')){
			$allObjects[] = $obj;
		}
		self::disconnect();
		return $allObjects;
	}

	public static function newsTotal(){

		self::connect();

		$query = "SELECT COUNT(*) as total FROM ".self::$table;

		$result = mysqli_query(self::$conn, $query);

		$data = mysqli_fetch_assoc($result);

		self::disconnect();
		return $data['total'];
	}

	public static function where($field, $value, $comp = '='){
		// select * from $table where $field $comp $value
		self::connect();
		$query = "SELECT * FROM ".self::$table." WHERE ".$field." ".$comp." ".$value;
		$result = mysqli_query(self::$conn, $query);
		$allObjects = array();
		while($obj = mysqli_fetch_object($result, 'Noticia')){
			$allObjects[] = $obj;
		}
		self::disconnect();
		return $allObjects;
	}

public function save($img, $arq){
		// insert into $table $values
		//$this->datalog = date("Y-m-d H:i:s");

		if (!is_null($img)) {
			$this->img = $img;
		}

		$values = "";
		$fields = "";
		//$this->language = "pt";
		foreach ($this as $attribute => $value) {
			if($attribute != 'pk'){
				if($values == ""){
					$values = "'".$value."'";
				}else{
					$values = $values.", '".$value."'";
				}

				if($fields == ""){
					$fields = "".$attribute;
				}else{
					$fields = $fields.", ".$attribute;
				}
			}
		}
		$query = "INSERT INTO ".self::$table. " (".$fields.") VALUES (".$values.")";
		self::connect();
		try{
			//echo $query."<br>";
			$result = mysqli_query(self::$conn, $query);
			if($result){
				$this->id = mysqli_insert_id();
				return true;
			}else{
				var_dump(mysqli_error(self::$conn));
				//return false;
			}
		}catch(Exception $e){
			var_dump($e);
			return false;
		}

		$this->id = mysqli_insert_id();
		//return true;
	}

	public function delete(){
		// delete from $table where id = $this->getId()
		//DELETE FROM `obec_equipe2` WHERE 1
		$query = "DELETE FROM ".self::$table." WHERE ".$this->pk." = ".$this->id;
		self::connect();
		try{
			$result = mysqli_query(self::$conn, $query);
			if(!$result){
				var_dump(mysqli_error());
			}
		}catch(Exception $e){
			var_dump($e);
			self::disconnect();
			return false;
		}
		self::disconnect();
		return true;
	}

		public function update($img, $arq){
		// update query
		//UPDATE `obec_equipe2` SET `id`=[value-1],`nome`=[value-2],`cargo`=[value-3],`cargo_en`=[value-4],`texto`=[value-5],`url`=[value-6],`img`=[value-7],`liberado`=[value-8],`iplog`=[value-9],`datalog`=[value-10],`ordem`=[value-11] WHERE 1
		//$this->datalog = date("Y-m-d H:i:s");
			if (!is_null($img)) {
				$this->img = $img;
			}

		$values = "";
		foreach ($this as $attribute => $value) {
			if($attribute != 'pk'){
				if($values == ""){
					$values = "$attribute = '".$value."'";
				}else{
					$values = $values.", ".("$attribute = '".$value."'");
				}
			}
		}
		$query = "UPDATE ".self::$table." SET $values WHERE ".$this->pk." = ".$this->id;
		self::connect();
		try{
			$result = mysqli_query(self::$conn, $query);
			if(!$result){
				var_dump(mysqli_error());
			}
		}catch(Exception $e){
			var_dump($e);
			self::disconnect();
			return false;
		}
		self::disconnect();
		return true;
	}

	public function getId(){
		$id = $this->pk;
		return $this->$id;
	}

	public function getDeleteModal(){
		echo '<!-- === modal === -->';
			echo '<div class="modal fade" id="deleteModalNews'.$this->getId().'" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">';
				echo '<div class="modal-dialog" role="document">';
					echo '<div class="modal-content">';

						echo '<div class="modal-header">';

							echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
								echo '<span aria-hidden="true">&times;</span>';
							echo '</button>';

							echo '<h4 class="modal-title">Remover Noticia</h4>';

						echo '</div>';

						echo '<div class="modal-body">';

							echo '<p>'.'Tem certeza que deseja remover a Noticia <strong>'.$this->titulo.'</strong> do sistema?</p>';

						echo '</div>';

						echo '<div class="modal-footer">';
							echo '<form method="post" action="../admin/actions.php">';
								echo '<input id="id" name="id" type="hidden" value="'.$this->getId().'">';
								echo '<input id="type" name="type" type="hidden" value="delete">';
								echo '<input id="class" name="class" type="hidden" value="Noticia">';
								echo '<button type="submit" class="button small">Remover</button>';
							echo '</form>';
						echo '</div>';

					echo '</div><!-- /.modal-content -->';
				echo '</div><!-- /.modal-dialog -->';
			echo '</div>';
		echo '<!-- /.modal -->';
	}


}
