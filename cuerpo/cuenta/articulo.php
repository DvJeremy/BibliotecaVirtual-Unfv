
<?php
class articulo
{
    private $titulo,$tipo,$id,$aa,$ident,$esp;

    public function __construct($id=NULL,$titulo,$tipo,$aa,$ident,$esp)
    {
        $this->titulo = $titulo;
        $this->tipo = $tipo;
		$this->aa = $aa;
		$this->ident = $ident;
		$this->esp = $esp;
        if ($id) {
            $this->id = $id;
        }
    }

    public function guardar()
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("INSERT INTO articulo
            (id_articulo,titulo,tipo,aa_publicacion,identificador,especialidad)
                VALUES
                ('',?,?,?,?,?)");
        $sentencia->bind_param("ssiss", $this->titulo, $this->tipo, $this->aa, $this->ident, $this->esp);
        $sentencia->execute();
    }

    public function obtener()
    {
        global $mysqli;
        $resultado = $mysqli->query("SELECT * FROM articulo");
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
	
    public function eliminar($id)
    {
        global $mysqli;
        $sentencia = $mysqli->prepare("DELETE FROM articulo WHERE id_articulo = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
    }
}
