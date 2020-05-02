PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  DOS;
VAR
  QueryString: STRING;
FUNCTION GetQueryStringParameter(Key: STRING): STRING;
VAR
  KeyPosition, i, Ampersand, Equality: BYTE;
  Meaning, KeyName: STRING;
BEGIN 
  KeyPosition := Pos(Key, QueryString);  
  Equality := Pos('=', QueryString);
  KeyName := Copy(QueryString, 1, Equality - 1);
  IF (KeyName <> Key)
  THEN
    BEGIN
      Ampersand := Pos('&', QueryString);
      DELETE(QueryString, 1, Pos('&', QueryString));
      Meaning := ''
    END 
  ELSE
    IF (KeyPosition <> 0) 
    THEN
      BEGIN 
        Delete(QueryString, 1, KeyPosition);
        Equality := Pos('=', QueryString); 
        Delete(QueryString, 1, Equality);
        Ampersand := POS('&', QueryString);
        Meaning := COPY(QueryString, 1, LENGTH(QueryString));
        FOR i := 1 TO Ampersand 
        DO
          Meaning := COPY(QueryString, 1, Ampersand - 1);
        DELETE(QueryString, 1, Ampersand);
      END;  
  GetQueryStringParameter := Meaning;    
END;
BEGIN {WorkWithQueryString}
  WRITELN('Content-Type: text/plain');
  WRITELN;
  QueryString := GetEnv('QUERY_STRING');
  WRITELN('First Name: ', GetQueryStringParameter('first_name'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END. {WorkWithQueryString}
