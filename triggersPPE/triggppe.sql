/*permet supprimer utilisateur et sont login et password en meme temps de la table admin*/
DROP trigger if exists supuser;
DELIMITER //
CREATE trigger supuser
BEFORE DELETE ON _utilisateur
FOR EACH ROW
BEGIN
  DELETE FROM admin where id = old.id;
  delete from membre where id=old.id;
END//
DELIMITER ;
/*permet supprimer utilisateur et sont login et password en meme temps de la table membre*/
