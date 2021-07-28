--------------------------------------------------------
--  File created - Monday-March-22-2021   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for Table CMS_WHITELIST_BLACKLIST
--------------------------------------------------------

  CREATE TABLE "CMS_WHITELIST_BLACKLIST" 
   (	"ID" NUMBER(38,9), 
	"NAME_LIST" VARCHAR2(99 BYTE), 
	"LIST_TYPE" VARCHAR2(20 BYTE), 
	"DESCRIPTION" VARCHAR2(99 BYTE), 
	"CREATED_AT" DATE, 
	"CREATED_BY" VARCHAR2(20 BYTE)
   ) ;

--------------------------------------------------------
--  DDL for Table CMS_WHITELIST_BLACKLIST_GROUP
--------------------------------------------------------

  CREATE TABLE "CMS_WHITELIST_BLACKLIST_GROUP" 
   (  "ID" NUMBER(38,9), 
  "WHITELIST_BLACKLIST_ID" NUMBER(38,0), 
  "WHITELIST_BLACKLIST_MASTER_ID" NUMBER(38,0)
   ) ;

--------------------------------------------------------
--  DDL for Table CMS_WHITELIST_BLACKLIST_MASTER
--------------------------------------------------------

  CREATE TABLE "CMS_WHITELIST_BLACKLIST_MASTER" 
   (  "ID" NUMBER(38,9), 
  "MSISDN" VARCHAR2(20 BYTE), 
  "REGIONAL" VARCHAR2(30 BYTE), 
  "BRANCH" VARCHAR2(30 BYTE), 
  "CREATED_AT" DATE, 
  "UPDATED_AT" DATE
   ) ;

--------------------------------------------------------
--  DDL for Table CMS_WLIST_BLIST_CHANNEL
--------------------------------------------------------

  CREATE TABLE "CMS_WLIST_BLIST_CHANNEL" 
   (  "ID" NUMBER(38,9), 
  "ID_WHITELIST_BLACKLIST" NUMBER(38,9), 
  "CHANNEL_ID" NUMBER(38,9)
   ) ;


--------------------------------------------------------
--  Constraints for Table CMS_WHITELIST_BLACKLIST
--------------------------------------------------------
  ALTER TABLE "CMS_WHITELIST_BLACKLIST" ADD CONSTRAINT "CMS_WHITELIST_BLACKLIST_PK" PRIMARY KEY ("ID") ENABLE;
  ALTER TABLE "CMS_WHITELIST_BLACKLIST" MODIFY ("ID" NOT NULL ENABLE);

--------------------------------------------------------
--  Constraints for Table CMS_WHITELIST_BLACKLIST_GROUP
--------------------------------------------------------

  ALTER TABLE "CMS_WHITELIST_BLACKLIST_GROUP" ADD CONSTRAINT "CMS_WHITELIST_BLACKLIST_GR_PK" PRIMARY KEY ("ID") ENABLE;
  ALTER TABLE "CMS_WHITELIST_BLACKLIST_GROUP" MODIFY ("ID" NOT NULL ENABLE);

--------------------------------------------------------
--  Constraints for Table CMS_WHITELIST_BLACKLIST_MASTER
--------------------------------------------------------

  ALTER TABLE "CMS_WHITELIST_BLACKLIST_MASTER" ADD CONSTRAINT "CMS_WHITELIST_BLACKLIST_MA_PK" PRIMARY KEY ("ID") ENABLE;
  ALTER TABLE "CMS_WHITELIST_BLACKLIST_MASTER" MODIFY ("ID" NOT NULL ENABLE);

--------------------------------------------------------
--  Constraints for Table CMS_WLIST_BLIST_CHANNEL
--------------------------------------------------------

  ALTER TABLE "CMS_WLIST_BLIST_CHANNEL" ADD CONSTRAINT "CMS_WLIST_BLIST_CHANNEL_PK" PRIMARY KEY ("ID") ENABLE;
  ALTER TABLE "CMS_WLIST_BLIST_CHANNEL" MODIFY ("ID" NOT NULL ENABLE);
  
--------------------------------------------------------
--  DDL for Table CMS_LOG_HISTORY_USER
--------------------------------------------------------
-- ADD COLUMN UPDATED_BY ON CMS_LOG_HISTORY_USER
ALTER TABLE
    "CMS_LOG_HISTORY_USER"
ADD
    ("UPDATED_BY" VARCHAR2(20 BYTE) );

-- ADD COLUMN SURVEY_CODE ON API_MYTSEL_V2 (DEVELOPMENT ONLY)
-- ALTER TABLE
--     "API_MYTSEL_V2"
-- ADD
--     ("SURVEY_CODE" NUMBER(9) );

-- MODIFY COLUMN DESKRIPSI ON CMS_AUDIT_TRAIL
ALTER TABLE
    "CMS_AUDIT_TRAIL"
MODIFY
    ("DESKRIPSI" VARCHAR2(255 BYTE) );

-- MODIFY COLUMN SURVEY_CHANGE ON CMS_LOG_HISTORY_USER
ALTER TABLE
    "CMS_LOG_HISTORY_USER"
MODIFY
    ("SURVEY_CHANGE" VARCHAR2(255 BYTE) );