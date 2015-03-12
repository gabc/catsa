(defvar gabc/listtable '("Texte" "Creation" "User" "Categorie" "Type" "Emplacement" "Image"))

(defun gabc/genere-drop-seq (list)
  (dolist (nom list)
    (let* ((seq (concat nom "_SEQ")))
      (insert (concat "DROP SEQUENCE " seq ";
")))))
    
(defun gabc/genere-triggerid (list)
  (dolist (nom list)
    (let* ((table (concat "CS_" nom))
	  (id "ID")
	  (seq (concat nom "_SEQ"))
	  (trigger (concat table "_TRG")))
      (insert (concat "CREATE OR REPLACE TRIGGER " trigger "
BEFORE INSERT ON " table "
FOR EACH ROW
BEGIN
  IF :new." id " IS NULL THEN
    SELECT " seq ".nextval INTO :new." id " FROM DUAL;
  END IF;
END;
/

")))))

(defun gabc/genere-seq (list)
  (dolist (n list)
    (let ((seq (concat n "_SEQ")))
      (insert (concat "CREATE SEQUENCE " seq "
    START WITH 1
    INCREMENT BY 1
    NOMAXVALUE
    NOCYCLE
    NOCACHE;

")))))
