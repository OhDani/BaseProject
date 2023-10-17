create table FARMTALE_ACCOUNT
    (
     user_ varchar(20)  not null,
     pass varchar(20) not null
    );
SELECT * FROM FARMTALE_ACCOUNT ;	
SELECT @@VERSION;	

 INSERT INTO FARMTALE_ACCOUNT VALUES ('ngoc', '123');
 INSERT INTO FARMTALE_ACCOUNT VALUES ('tram', '456');
 drop table FARMTALE_ACCOUNT