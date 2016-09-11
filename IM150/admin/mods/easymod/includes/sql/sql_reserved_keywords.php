<?php
/**
 *
 * @package SQL Parser
 * @version $Id: sql_reserved_keywords.php,v 1.3 2005/09/26 09:59:13 markus_petrux Exp $
 * @copyright (c) 2005 phpBB Group
 * @license http://opensource.org/licenses/gpl-license.php GNU General Public License
 *
 */


/**
 * Reserved Keywords for SQL Parser
 *
 * - Reserved keyword lookups are made in the order of this table.
 * - There are many duplicates here, though, the loader takes care of them.
 */
$reserved_keywords = array(
	'SQL_99' => array(
		'reference'	=> 'http://www.postgresql.org/docs/7.3/static/sql-keywords-appendix.html'
	),
	'SQL_92' => array(
		'reference'	=> 'http://www.postgresql.org/docs/7.3/static/sql-keywords-appendix.html'
	),
	'PostgreSQL' => array(
		'reference'	=> 'http://www.postgresql.org/docs/7.3/static/sql-keywords-appendix.html'
	),
	'Microsoft_SQL_Server' => array(
		'reference'	=> 'http://msdn.microsoft.com/library/en-us/tsqlref/ts_ra-rz_9oj7.asp'
	),
	'MySQL' => array(
		'reference'	=> 'http://dev.mysql.com/doc/mysql/en/reserved-words.html'
	)
);

/**
 * Reserved Keywords (SQL 99)
 */
$reserved_keywords['SQL_99']['keywords'] = <<<SQL_PARSER_END_OF_DATA
ABSOLUTE
ACTION
ADD
ADMIN
AFTER
AGGREGATE
ALIAS
ALL
ALLOCATE
ALTER
AND
ANY
ARE
ARRAY
AS
ASC
ASSERTION
AT
AUTHORIZATION
BEFORE
BEGIN
BINARY
BIT
BLOB
BOOLEAN
BOTH
BREADTH
BY
CALL
CASCADE
CASCADED
CASE
CAST
CATALOG
CHAR
CHARACTER
CHECK
CLASS
CLOB
CLOSE
COLLATE
COLLATION
COLUMN
COMMIT
COMPLETION
CONNECT
CONNECTION
CONSTRAINT
CONSTRAINTS
CONSTRUCTOR
CONTINUE
CORRESPONDING
CREATE
CROSS
CUBE
CURRENT
CURRENT_DATE
CURRENT_PATH
CURRENT_ROLE
CURRENT_TIME
CURRENT_TIMESTAMP
CURRENT_USER
CURSOR
CYCLE
DATA
DATE
DAY
DEALLOCATE
DEC
DECIMAL
DECLARE
DEFAULT
DEFERRABLE
DEFERRED
DELETE
DEPTH
DEREF
DESC
DESCRIBE
DESCRIPTOR
DESTROY
DESTRUCTOR
DETERMINISTIC
DIAGNOSTICS
DICTIONARY
DISCONNECT
DISTINCT
DOMAIN
DOUBLE
DROP
DYNAMIC
EACH
ELSE
END
END-EXEC
EQUALS
ESCAPE
EVERY
EXCEPT
EXCEPTION
EXEC
EXECUTE
EXTERNAL
FALSE
FETCH
FIRST
FLOAT
FOR
FOREIGN
FOUND
FREE
FROM
FULL
FUNCTION
GENERAL
GET
GLOBAL
GO
GOTO
GRANT
GROUP
GROUPING
HAVING
HOST
HOUR
IDENTITY
IGNORE
IMMEDIATE
IN
INDICATOR
INITIALIZE
INITIALLY
INNER
INOUT
INPUT
INSERT
INT
INTEGER
INTERSECT
INTERVAL
INTO
IS
ISOLATION
ITERATE
JOIN
KEY
LANGUAGE
LARGE
LAST
LATERAL
LEADING
LEFT
LESS
LEVEL
LIKE
LIMIT
LOCAL
LOCALTIME
LOCALTIMESTAMP
LOCATOR
MAP
MATCH
MINUTE
MODIFIES
MODIFY
MODULE
MONTH
NAMES
NATIONAL
NATURAL
NCHAR
NCLOB
NEW
NEXT
NO
NONE
NOT
NULL
NUMERIC
OBJECT
OF
OFF
OLD
ON
ONLY
OPEN
OPERATION
OPTION
OR
ORDER
ORDINALITY
OUT
OUTER
OUTPUT
PAD
PARAMETER
PARAMETERS
PARTIAL
PATH
POSTFIX
PRECISION
PREFIX
PREORDER
PREPARE
PRESERVE
PRIMARY
PRIOR
PRIVILEGES
PROCEDURE
PUBLIC
READ
READS
REAL
RECURSIVE
REF
REFERENCES
REFERENCING
RELATIVE
RESTRICT
RESULT
RETURN
RETURNS
REVOKE
RIGHT
ROLE
ROLLBACK
ROLLUP
ROUTINE
ROW
ROWS
SAVEPOINT
SCHEMA
SCOPE
SCROLL
SEARCH
SECOND
SECTION
SELECT
SEQUENCE
SESSION
SESSION_USER
SET
SETS
SIZE
SMALLINT
SOME
SPACE
SPECIFIC
SPECIFICTYPE
SQL
SQLEXCEPTION
SQLSTATE
SQLWARNING
START
STATE
STATEMENT
STATIC
STRUCTURE
SYSTEM_USER
TABLE
TEMPORARY
TERMINATE
THAN
THEN
TIME
TIMESTAMP
TIMEZONE_HOUR
TIMEZONE_MINUTE
TO
TRAILING
TRANSACTION
TRANSLATION
TREAT
TRIGGER
TRUE
UNDER
UNION
UNIQUE
UNKNOWN
UNNEST
UPDATE
USAGE
USER
USING
VALUE
VALUES
VARCHAR
VARIABLE
VARYING
VIEW
WHEN
WHENEVER
WHERE
WITH
WITHOUT
WORK
WRITE
YEAR
ZONE
SQL_PARSER_END_OF_DATA;

/**
 * Reserved Keywords (SQL 92)
 */
$reserved_keywords['SQL_92']['keywords'] = <<<SQL_PARSER_END_OF_DATA
ABSOLUTE
ACTION
ADD
ALL
ALLOCATE
ALTER
AND
ANY
ARE
AS
ASC
ASSERTION
AT
AUTHORIZATION
AVG
BEGIN
BETWEEN
BIT
BIT_LENGTH
BOTH
BY
CASCADE
CASCADED
CASE
CAST
CATALOG
CHAR
CHARACTER
CHARACTER_LENGTH
CHAR_LENGTH
CHECK
CLOSE
COALESCE
COLLATE
COLLATION
COLUMN
COMMIT
CONNECT
CONNECTION
CONSTRAINT
CONSTRAINTS
CONTINUE
CONVERT
CORRESPONDING
COUNT
CREATE
CROSS
CURRENT
CURRENT_DATE
CURRENT_TIME
CURRENT_TIMESTAMP
CURRENT_USER
CURSOR
DATE
DAY
DEALLOCATE
DEC
DECIMAL
DECLARE
DEFAULT
DEFERRABLE
DEFERRED
DELETE
DESC
DESCRIBE
DESCRIPTOR
DIAGNOSTICS
DISCONNECT
DISTINCT
DOMAIN
DOUBLE
DROP
ELSE
END
END-EXEC
ESCAPE
EXCEPT
EXCEPTION
EXEC
EXECUTE
EXISTS
EXTERNAL
EXTRACT
FALSE
FETCH
FIRST
FLOAT
FOR
FOREIGN
FOUND
FROM
FULL
GET
GLOBAL
GO
GOTO
GRANT
GROUP
HAVING
HOUR
IDENTITY
IMMEDIATE
IN
INDICATOR
INITIALLY
INNER
INPUT
INSENSITIVE
INSERT
INT
INTEGER
INTERSECT
INTERVAL
INTO
IS
ISOLATION
JOIN
KEY
LANGUAGE
LAST
LEADING
LEFT
LEVEL
LIKE
LOCAL
LOWER
MATCH
MAX
MIN
MINUTE
MODULE
MONTH
NAMES
NATIONAL
NATURAL
NCHAR
NEXT
NO
NOT
NULL
NULLIF
NUMERIC
OCTET_LENGTH
OF
ON
ONLY
OPEN
OPTION
OR
ORDER
OUTER
OUTPUT
OVERLAPS
PAD
PARTIAL
POSITION
PRECISION
PREPARE
PRESERVE
PRIMARY
PRIOR
PRIVILEGES
PROCEDURE
PUBLIC
READ
REAL
REFERENCES
RELATIVE
RESTRICT
REVOKE
RIGHT
ROLLBACK
ROWS
SCHEMA
SCROLL
SECOND
SECTION
SELECT
SESSION
SESSION_USER
SET
SIZE
SMALLINT
SOME
SPACE
SQL
SQLCODE
SQLERROR
SQLSTATE
SUBSTRING
SUM
SYSTEM_USER
TABLE
TEMPORARY
THEN
TIME
TIMESTAMP
TIMEZONE_HOUR
TIMEZONE_MINUTE
TO
TRAILING
TRANSACTION
TRANSLATE
TRANSLATION
TRIM
TRUE
UNION
UNIQUE
UNKNOWN
UPDATE
UPPER
USAGE
USER
USING
VALUE
VALUES
VARCHAR
VARYING
VIEW
WHEN
WHENEVER
WHERE
WITH
WORK
WRITE
YEAR
ZONE
SQL_PARSER_END_OF_DATA;

/**
 * Reserved Keywords (PostgreSQL)
 */
$reserved_keywords['PostgreSQL']['keywords'] = <<<SQL_PARSER_END_OF_DATA
ALL
ANALYSE
ANALYZE
AND
ANY
AS
ASC
AUTHORIZATION
BETWEEN
BINARY
BOTH
CASE
CAST
CHECK
COLLATE
COLUMN
CONSTRAINT
CREATE
CROSS
CURRENT_DATE
CURRENT_TIME
CURRENT_TIMESTAMP
CURRENT_USER
DEFAULT
DEFERRABLE
DESC
DISTINCT
DO
ELSE
END
EXCEPT
FALSE
FOR
FOREIGN
FREEZE
FROM
FULL
GRANT
GROUP
HAVING
ILIKE
IN
INITIALLY
INNER
INTERSECT
INTO
IS
ISNULL
JOIN
LEADING
LEFT
LIKE
LIMIT
LOCALTIME
LOCALTIMESTAMP
NATURAL
NEW
NOT
NOTNULL
NULL
OFF
OFFSET
OLD
ON
ONLY
OR
ORDER
OUTER
OVERLAPS
PLACING
PRIMARY
REFERENCES
RIGHT
SELECT
SESSION_USER
SIMILAR
SOME
TABLE
THEN
TO
TRAILING
TRUE
UNION
UNIQUE
USER
USING
VERBOSE
WHEN
WHERE
SQL_PARSER_END_OF_DATA;

/**
 * Reserved Keywords (Microsoft SQL Server)
 */
$reserved_keywords['Microsoft_SQL_Server']['keywords'] = <<<SQL_PARSER_END_OF_DATA
ADD
ALL
ALTER
AND
ANY
AS
ASC
AUTHORIZATION
BACKUP
BEGIN
BETWEEN
BREAK
BROWSE
BULK
BY
CASCADE
CASE
CHECK
CHECKPOINT
CLOSE
CLUSTERED
COALESCE
COLLATE
COLUMN
COMMIT
COMPUTE
CONSTRAINT
CONTAINS
CONTAINSTABLE
CONTINUE
CONVERT
CREATE
CROSS
CURRENT
CURRENT_DATE
CURRENT_TIME
CURRENT_TIMESTAMP
CURRENT_USER
CURSOR
DATABASE
DBCC
DEALLOCATE
DECLARE
DEFAULT
DELETE
DENY
DESC
DISK
DISTINCT
DISTRIBUTED
DOUBLE
DROP
DUMMY
DUMP
ELSE
END
ERRLVL
ESCAPE
EXCEPT
EXEC
EXECUTE
EXISTS
EXIT
FETCH
FILE
FILLFACTOR
FOR
FOREIGN
FREETEXT
FREETEXTTABLE
FROM
FULL
FUNCTION
GOTO
GRANT
GROUP
HAVING
HOLDLOCK
IDENTITY
IDENTITY_INSERT
IDENTITYCOL
IF
IN
INDEX
INNER
INSERT
INTERSECT
INTO
IS
JOIN
KEY
KILL
LEFT
LIKE
LINENO
LOAD
NATIONAL
NOCHECK
NONCLUSTERED
NOT
NULL
NULLIF
OF
OFF
OFFSETS
ON
OPEN
OPENDATASOURCE
OPENQUERY
OPENROWSET
OPENXML
OPTION
OR
ORDER
OUTER
OVER
PERCENT
PLAN
PRECISION
PRIMARY
PRINT
PROC
PROCEDURE
PUBLIC
RAISERROR
READ
READTEXT
RECONFIGURE
REFERENCES
REPLICATION
RESTORE
RESTRICT
RETURN
REVOKE
RIGHT
ROLLBACK
ROWCOUNT
ROWGUIDCOL
RULE
SAVE
SCHEMA
SELECT
SESSION_USER
SET
SETUSER
SHUTDOWN
SOME
STATISTICS
SYSTEM_USER
TABLE
TEXTSIZE
THEN
TO
TOP
TRAN
TRANSACTION
TRIGGER
TRUNCATE
TSEQUAL
UNION
UNIQUE
UPDATE
UPDATETEXT
USE
USER
VALUES
VARYING
VIEW
WAITFOR
WHEN
WHERE
WHILE
WITH
WRITETEXT
SQL_PARSER_END_OF_DATA;

/**
 * Reserved Keywords (MySQL)
 */
$reserved_keywords['MySQL']['keywords'] = <<<SQL_PARSER_END_OF_DATA
ACTION
ADD
AFTER
AGAINST
AGGREGATE
ALGORITHM
ALL
ALTER
ANALYZE
AND
ANY
AS
ASC
ASCII
ASENSITIVE
AUTO_INCREMENT
AVG
AVG_ROW_LENGTH
BACKUP
BDB
BEFORE
BEGIN
BERKELEYDB
BETWEEN
BIGINT
BINARY
BINLOG
BIT
BLOB
BOOL
BOOLEAN
BOTH
BTREE
BY
BYTE
CACHE
CALL
CASCADE
CASCADED
CASE
CHAIN
CHANGE
CHANGED
CHAR
CHARACTER
CHARSET
CHECK
CHECKSUM
CIPHER
CLIENT
CLOSE
COLLATE
COLLATION
COLUMN
COLUMNS
COMMENT
COMMIT
COMMITTED
COMPACT
COMPRESSED
CONCURRENT
CONDITION
CONNECTION
CONSISTENT
CONSTRAINT
CONTAINS
CONTINUE
CONVERT
CREATE
CROSS
CUBE
CURRENT_DATE
CURRENT_TIME
CURRENT_TIMESTAMP
CURRENT_USER
CURSOR
DATA
DATABASE
DATABASES
DATE
DATETIME
DAY
DAY_HOUR
DAY_MICROSECOND
DAY_MINUTE
DAY_SECOND
DEALLOCATE
DEC
DECIMAL
DECLARE
DEFAULT
DEFINER
DELAYED
DELAY_KEY_WRITE
DELETE
DESC
DESCRIBE
DES_KEY_FILE
DETERMINISTIC
DIRECTORY
DISABLE
DISCARD
DISTINCT
DISTINCTROW
DIV
DO
DOUBLE
DROP
DUAL
DUMPFILE
DUPLICATE
DYNAMIC
EACH
ELSE
ELSEIF
ENABLE
ENCLOSED
END
ENGINE
ENGINES
ENUM
ERRORS
ESCAPE
ESCAPED
EVENTS
EXECUTE
EXISTS
EXIT
EXPANSION
EXPLAIN
EXTENDED
FALSE
FAST
FETCH
FIELDS
FILE
FIRST
FIXED
FLOAT
FLOAT4
FLOAT8
FLUSH
FOR
FORCE
FOREIGN
FOUND
FRAC_SECOND
FROM
FULL
FULLTEXT
FUNCTION
GEOMETRY
GEOMETRYCOLLECTION
GET_FORMAT
GLOBAL
GOTO
GRANT
GRANTS
GROUP
HANDLER
HASH
HAVING
HELP
HIGH_PRIORITY
HOSTS
HOUR
HOUR_MICROSECOND
HOUR_MINUTE
HOUR_SECOND
IDENTIFIED
IF
IGNORE
IMPORT
IN
INDEX
INDEXES
INFILE
INNER
INNOBASE
INNODB
INOUT
INSENSITIVE
INSERT
INSERT_METHOD
INT
INT1
INT2
INT3
INT4
INT8
INTEGER
INTERVAL
INTO
INVOKER
IO_THREAD
IS
ISOLATION
ISSUER
ITERATE
JOIN
KEY
KEYS
KILL
LABEL
LANGUAGE
LAST
LEADING
LEAVE
LEAVES
LEFT
LEVEL
LIKE
LIMIT
LINES
LINESTRING
LOAD
LOCAL
LOCALTIME
LOCALTIMESTAMP
LOCK
LOCKS
LOGS
LONG
LONGBLOB
LONGTEXT
LOOP
LOW_PRIORITY
MASTER
MASTER_CONNECT_RETRY
MASTER_HOST
MASTER_LOG_FILE
MASTER_LOG_POS
MASTER_PASSWORD
MASTER_PORT
MASTER_SERVER_ID
MASTER_SSL
MASTER_SSL_CA
MASTER_SSL_CAPATH
MASTER_SSL_CERT
MASTER_SSL_CIPHER
MASTER_SSL_KEY
MASTER_USER
MATCH
MAX_CONNECTIONS_PER_HOUR
MAX_QUERIES_PER_HOUR
MAX_ROWS
MAX_UPDATES_PER_HOUR
MAX_USER_CONNECTIONS
MEDIUM
MEDIUMBLOB
MEDIUMINT
MEDIUMTEXT
MERGE
MICROSECOND
MIDDLEINT
MIGRATE
MINUTE
MINUTE_MICROSECOND
MINUTE_SECOND
MIN_ROWS
MOD
MODE
MODIFIES
MODIFY
MONTH
MULTILINESTRING
MULTIPOINT
MULTIPOLYGON
MUTEX
NAME
NAMES
NATIONAL
NATURAL
NCHAR
NDB
NDBCLUSTER
NEW
NEXT
NO
NONE
NOT
NO_WRITE_TO_BINLOG
NULL
NUMERIC
NVARCHAR
OFFSET
OLD_PASSWORD
ON
ONE
ONE_SHOT
OPEN
OPTIMIZE
OPTION
OPTIONALLY
OR
ORDER
OUT
OUTER
OUTFILE
PACK_KEYS
PARTIAL
PASSWORD
PHASE
POINT
POLYGON
PRECISION
PREPARE
PREV
PRIMARY
PRIVILEGES
PROCEDURE
PROCESSLIST
PURGE
QUARTER
QUERY
QUICK
RAID0
RAID_CHUNKS
RAID_CHUNKSIZE
RAID_TYPE
READ
READS
REAL
RECOVER
REDUNDANT
REFERENCES
REGEXP
RELAY_LOG_FILE
RELAY_LOG_POS
RELAY_THREAD
RELEASE
RELOAD
RENAME
REPAIR
REPEAT
REPEATABLE
REPLACE
REPLICATION
REQUIRE
RESET
RESTORE
RESTRICT
RESUME
RETURN
RETURNS
REVOKE
RIGHT
RLIKE
ROLLBACK
ROLLUP
ROUTINE
ROW
ROWS
ROW_FORMAT
RTREE
SAVEPOINT
SCHEMA
SCHEMAS
SECOND
SECOND_MICROSECOND
SECURITY
SELECT
SENSITIVE
SEPARATOR
SERIAL
SERIALIZABLE
SESSION
SET
SHARE
SHOW
SHUTDOWN
SIGNED
SIMPLE
SLAVE
SMALLINT
SNAPSHOT
SOME
SONAME
SOUNDS
SPATIAL
SPECIFIC
SQL
SQLEXCEPTION
SQLSTATE
SQLWARNING
SQL_BIG_RESULT
SQL_BUFFER_RESULT
SQL_CACHE
SQL_CALC_FOUND_ROWS
SQL_NO_CACHE
SQL_SMALL_RESULT
SQL_THREAD
SQL_TSI_DAY
SQL_TSI_FRAC_SECOND
SQL_TSI_HOUR
SQL_TSI_MINUTE
SQL_TSI_MONTH
SQL_TSI_QUARTER
SQL_TSI_SECOND
SQL_TSI_WEEK
SQL_TSI_YEAR
SSL
START
STARTING
STATUS
STOP
STORAGE
STRAIGHT_JOIN
STRING
STRIPED
SUBJECT
SUPER
SUSPEND
TABLE
TABLES
TABLESPACE
TEMPORARY
TEMPTABLE
TERMINATED
TEXT
THEN
TIME
TIMESTAMP
TIMESTAMPADD
TIMESTAMPDIFF
TINYBLOB
TINYINT
TINYTEXT
TO
TRAILING
TRANSACTION
TRIGGER
TRIGGERS
TRUE
TRUNCATE
TYPE
TYPES
UNCOMMITTED
UNDEFINED
UNDO
UNICODE
UNION
UNIQUE
UNKNOWN
UNLOCK
UNSIGNED
UNTIL
UPDATE
USAGE
USE
USER
USER_RESOURCES
USE_FRM
USING
UTC_DATE
UTC_TIME
UTC_TIMESTAMP
VALUE
VALUES
VARBINARY
VARCHAR
VARCHARACTER
VARIABLES
VARYING
VIEW
WARNINGS
WEEK
WHEN
WHERE
WHILE
WITH
WORK
WRITE
X509
XA
XOR
YEAR
YEAR_MONTH
ZEROFILL
SQL_PARSER_END_OF_DATA;

?>