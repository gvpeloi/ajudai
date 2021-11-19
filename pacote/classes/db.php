<?php
//-----------------------------CONEXAO BD--------------------------------
class db
{
    private $pdo;
    private const host = "lasanhagames.com";
	private const nome = "lasanh59_projeto_login";
    private const user = "lasanh59_root";
    private const pswd = "lasanha123@";

    function __construct()
    {
        try 
        {
			$this->pdo = new PDO("mysql:host=".self::host.";dbname=".self::nome, self::user, self::pswd);
        }

        catch (PDOException $e){
            echo "Erro com banco de dados:" .$e->getMessage();
        }
        catch(Exception $e)
        {
            echo "Erro generico:" .$e->getMessage();            
        }      
    }

    
    public function prepare($value)
    {
		try
		{
        	return $this->pdo->prepare($value);
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
    }
}

?>