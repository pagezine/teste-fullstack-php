<?php
    namespace App\Models;

    class Carros
    {
        private static $table = 'veiculos';

        public static function select(int $id) {
            $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

            $sql = 'SELECT * FROM '.self::$table.' WHERE id = :id';
            $stmt = $connPdo->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(\PDO::FETCH_ASSOC);
            } else {
                throw new \Exception("Nenhum veiculo encontrado!");
            }
        }

        public static function selectAll() {
            $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);

            $sql = 'SELECT * FROM '.self::$table;
            $stmt = $connPdo->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            } else {
                throw new \Exception("Nenhum veiculo encontrado!");
            }
        }

        public static function insert($data)
        {
            $connPdo = new \PDO(DBDRIVE.': host='.DBHOST.'; dbname='.DBNAME, DBUSER, DBPASS);
			
		    $sql = 'INSERT INTO '.self::$table.' (fabricante,veiculo, ano, descricao, criado) VALUES (:fa, :ve, :an, :de, :cr :)';
            $stmt = $connPdo->prepare($sql);
            $stmt->bindValue(':fa', $data['fabricante']);
            $stmt->bindValue(':ve', $data['veiculo']);
            $stmt->bindValue(':an', $data['ano']);
			$stmt->bindValue(':de', $data['descricao']);
			$stmt->bindValue(':cr', $data['criado']);
		    $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return 'Veiculo inserido com sucesso!';
            } else {
                throw new \Exception("Falha ao inserir veiculo!");
            }
        }
    }