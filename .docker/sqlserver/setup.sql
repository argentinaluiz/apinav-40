IF NOT EXISTS
    (
        SELECT name FROM master.dbo.sysdatabases
        WHERE name = N'apinav'
    )
CREATE DATABASE [apinav];

IF NOT EXISTS
    (
        SELECT name FROM master.dbo.sysdatabases
        WHERE name = N'apinav_test'
    )
CREATE DATABASE [apinav_test];