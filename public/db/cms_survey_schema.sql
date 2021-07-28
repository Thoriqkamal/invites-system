--------------------------------------------------------
--  File created - Thursday-February-04-2021   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for Table CMS_ANSWERS
--------------------------------------------------------
CREATE TABLE "CMS_ANSWERS" (
  "ANSWER_CODE" NUMBER(*, 9),
  "A_TEXT_EN" CLOB,
  "A_TEXT_IND" CLOB,
  "CREATED_AT" DATE,
  "CREATED_BY" VARCHAR2(50)
);

--------------------------------------------------------
--  DDL for Table CMS_ANSWERS_GROUP
--------------------------------------------------------
CREATE TABLE "CMS_ANSWERS_GROUP" (
  "ANSWER_GROUP_CODE" NUMBER(*, 9),
  "ANSWER_CODE" NUMBER(9, 0),
  "A_TYPE" VARCHAR2(30),
  "A_VALUE" VARCHAR2(30),
  "CREATED_AT" DATE,
  "CREATED_BY" VARCHAR2(50)
);

--------------------------------------------------------
--  DDL for Table CMS_AUDIT_TRAIL
--------------------------------------------------------
CREATE TABLE "CMS_AUDIT_TRAIL" (
  "AUDIT_TRAIL_CODE" NUMBER(38, 9),
  "USERNAME" VARCHAR2(200),
  "MENU" VARCHAR2(200),
  "ACTIVITY" VARCHAR2(200),
  "DESKRIPSI" VARCHAR2(200),
  "CREATED_AT" DATE
);

--------------------------------------------------------
--  DDL for Table CMS_LOG_HISTORY_USER
--------------------------------------------------------
CREATE TABLE "CMS_LOG_HISTORY_USER" (
  "ID" NUMBER(*, 0),
  "ID_QUESTIONS" NUMBER(9, 0),
  "USERNAME" VARCHAR2(99),
  "SURVEY_CODE" NUMBER(38, 0),
  "SURVEY_CHANGE" VARCHAR2(200),
  "CREATED_AT" DATE
);

--------------------------------------------------------
--  DDL for Table CMS_QUESTIONS
--------------------------------------------------------
CREATE TABLE "CMS_QUESTIONS" (
  "QUESTION_CODE" NUMBER(*, 9),
  "Q_TYPE" VARCHAR2(20),
  "Q_TEXT_EN" CLOB,
  "Q_TEXT_IND" CLOB,
  "CREATED_AT" DATE,
  "CREATED_BY" VARCHAR2(50)
);

--------------------------------------------------------
--  DDL for Table CMS_QUESTIONS_GROUP
--------------------------------------------------------
CREATE TABLE "CMS_QUESTIONS_GROUP" (
  "ID" NUMBER(9, 0),
  "SURVEY_CODE" NUMBER(9, 0),
  "QUESTION_CODE" NUMBER(9, 0),
  "ANSWER_GROUP_CODE" NUMBER(9, 0),
  "Q_TYPE" VARCHAR2(20),
  "Q_ID" VARCHAR2(10),
  "Q_PAGE" NUMBER(5, 0),
  "Q_ORDER" NUMBER(9, 0),
  "Q_MANDATORY" NUMBER(1, 0),
  "A_ID" VARCHAR2(10),
  "A_TYPE" VARCHAR2(30),
  "A_DEFAULT" NUMBER(9, 0),
  "A_MIN_SCALE_TEXT_EN" VARCHAR2(30),
  "A_MIN_SCALE_TEXT_ID" VARCHAR2(30),
  "A_MAX_SCALE_TEXT_EN" VARCHAR2(30),
  "A_MAX_SCALE_TEXT_ID" VARCHAR2(30),
  "CREATED_AT" DATE,
  "CREATED_BY" VARCHAR2(50),
  "UPDATED_AT" DATE,
  "UPDATED_BY" VARCHAR2(50)
);

--------------------------------------------------------
--  DDL for Table CMS_SURVEY
--------------------------------------------------------
CREATE TABLE "CMS_SURVEY" (
  "SURVEY_CODE" NUMBER(*, 9),
  "SURVEY_NAME" VARCHAR2(100),
  "CHANNEL" NUMBER(9, 0),
  "IS_APPROVED" NUMBER(1, 0),
  "IS_ACTIVE" NUMBER(1, 0),
  "IS_JOURNEY" NUMBER(1, 0),
  "ACTIVE_DATE" DATE,
  "CREATED_AT" DATE,
  "CREATED_BY" VARCHAR2(50),
  "UPDATED_AT" DATE,
  "UPDATED_BY" VARCHAR2(50),
  "DISABLE_AT" DATE,
  "DISABLE_BY" VARCHAR2(50),
  "APPROVED_AT" DATE,
  "APPROVED_BY" VARCHAR2(50),
  "IS_DELETED" NUMBER(1, 0) DEFAULT 0,
  "REJECT_REASON" VARCHAR2(200)
);

--------------------------------------------------------
--  DDL for Table CMS_USERS
--------------------------------------------------------
CREATE TABLE "CMS_USERS" (
  "ID" NUMBER(9, 0),
  "USERNAME" VARCHAR2(20),
  "POSITION" VARCHAR2(50),
  "EMAIL" VARCHAR2(50),
  "PHONE" VARCHAR2(20),
  "CREATED_AT" DATE,
  "UPDATED_AT" DATE
);

--------------------------------------------------------
--  DDL for Table CMS_USERS_ROLES
--------------------------------------------------------
CREATE TABLE "CMS_USERS_ROLES" ("ID" NUMBER(9, 0), "NAME" VARCHAR2(20));

--------------------------------------------------------
--  DDL for Table CMS_USERS_ROLES_GROUP
--------------------------------------------------------
CREATE TABLE "CMS_USERS_ROLES_GROUP" (
  "ID" NUMBER(9, 0),
  "USER_ID" NUMBER(9, 0),
  "ROLE_ID" NUMBER(9, 0)
);

--------------------------------------------------------
--  DDL for Index CMS_ANSWERS_PK
--------------------------------------------------------
CREATE UNIQUE INDEX "CMS_ANSWERS_PK" ON "CMS_ANSWERS" ("ANSWER_CODE");

--------------------------------------------------------
--  DDL for Index CMS_AUDIT_TRAIL_PK
--------------------------------------------------------
CREATE UNIQUE INDEX "CMS_AUDIT_TRAIL_PK" ON "CMS_AUDIT_TRAIL" ("AUDIT_TRAIL_CODE");

--------------------------------------------------------
--  DDL for Index CMS_LOG_HISTORY_USER_PK
--------------------------------------------------------
CREATE UNIQUE INDEX "CMS_LOG_HISTORY_USER_PK" ON "CMS_LOG_HISTORY_USER" ("ID");

--------------------------------------------------------
--  DDL for Index CMS_QUESTIONS_PK
--------------------------------------------------------
CREATE UNIQUE INDEX "CMS_QUESTIONS_PK" ON "CMS_QUESTIONS" ("QUESTION_CODE");

--------------------------------------------------------
--  DDL for Index CMS_QUESTIONS_GROUP_PK
--------------------------------------------------------
CREATE UNIQUE INDEX "CMS_QUESTIONS_GROUP_PK" ON "CMS_QUESTIONS_GROUP" ("ID");

--------------------------------------------------------
--  DDL for Index CMS_SURVEY_PK
--------------------------------------------------------
CREATE UNIQUE INDEX "CMS_SURVEY_PK" ON "CMS_SURVEY" ("SURVEY_CODE");

--------------------------------------------------------
--  DDL for Index CMS_USERS_PK
--------------------------------------------------------
CREATE UNIQUE INDEX "CMS_USERS_PK" ON "CMS_USERS" ("USERNAME");

--------------------------------------------------------
--  DDL for Index CMS_USERS_PK1
--------------------------------------------------------
CREATE UNIQUE INDEX "CMS_USERS_PK1" ON "CMS_USERS" ("USERNAME", "ID");

--------------------------------------------------------
--  DDL for Index CMS_USERS_ROLES_PK
--------------------------------------------------------
CREATE UNIQUE INDEX "CMS_USERS_ROLES_PK" ON "CMS_USERS_ROLES" ("ID");

--------------------------------------------------------
--  DDL for Index CMS_USERS_ROLES_GROUP_PK
--------------------------------------------------------
CREATE UNIQUE INDEX "CMS_USERS_ROLES_GROUP_PK" ON "CMS_USERS_ROLES_GROUP" ("ID");

--------------------------------------------------------
--  DDL for Sequence CMS_ANSWERS_SEQ
--------------------------------------------------------
CREATE SEQUENCE "CMS_ANSWERS_SEQ" MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 15 CACHE 20 NOORDER NOCYCLE;

--------------------------------------------------------
--  DDL for Sequence CMS_AUDIT_TRAIL_SEQ
--------------------------------------------------------
CREATE SEQUENCE "CMS_AUDIT_TRAIL_SEQ" MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER NOCYCLE;

--------------------------------------------------------
--  DDL for Sequence CMS_LOG_HISTORY_USER_SEQ
--------------------------------------------------------
CREATE SEQUENCE "CMS_LOG_HISTORY_USER_SEQ" MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 1 CACHE 20 NOORDER NOCYCLE;

--------------------------------------------------------
--  DDL for Sequence CMS_QUESTIONS_GROUP_SEQ
--------------------------------------------------------
CREATE SEQUENCE "CMS_QUESTIONS_GROUP_SEQ" MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 17 CACHE 20 NOORDER NOCYCLE;

--------------------------------------------------------
--  DDL for Sequence CMS_QUESTIONS_SEQ
--------------------------------------------------------
CREATE SEQUENCE "CMS_QUESTIONS_SEQ" MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 6 CACHE 20 NOORDER NOCYCLE;

--------------------------------------------------------
--  DDL for Sequence CMS_SURVEY_SEQ
--------------------------------------------------------
CREATE SEQUENCE "CMS_SURVEY_SEQ" MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 5 CACHE 20 NOORDER NOCYCLE;

--------------------------------------------------------
--  DDL for Sequence CMS_USERS_ROLES_GROUP_SEQ
--------------------------------------------------------
CREATE SEQUENCE "CMS_USERS_ROLES_GROUP_SEQ" MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 4 CACHE 20 NOORDER NOCYCLE;

--------------------------------------------------------
--  DDL for Sequence CMS_USERS_ROLES_SEQ
--------------------------------------------------------
CREATE SEQUENCE "CMS_USERS_ROLES_SEQ" MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 5 CACHE 20 NOORDER NOCYCLE;

--------------------------------------------------------
--  DDL for Sequence CMS_USERS_SEQ
--------------------------------------------------------
CREATE SEQUENCE "CMS_USERS_SEQ" MINVALUE 1 MAXVALUE 9999999999999999999999999999 INCREMENT BY 1 START WITH 3 CACHE 20 NOORDER NOCYCLE;

--------------------------------------------------------
--  Constraints for Table CMS_ANSWERS
--------------------------------------------------------
ALTER TABLE
  "CMS_ANSWERS"
MODIFY
  ("ANSWER_CODE" NOT NULL ENABLE);

ALTER TABLE
  "CMS_ANSWERS"
ADD
  PRIMARY KEY ("ANSWER_CODE") ENABLE;

--------------------------------------------------------
--  Constraints for Table CMS_ANSWERS_GROUP
--------------------------------------------------------
ALTER TABLE
  "CMS_ANSWERS_GROUP"
MODIFY
  ("A_TYPE" NOT NULL ENABLE);

ALTER TABLE
  "CMS_ANSWERS_GROUP"
MODIFY
  ("ANSWER_CODE" NOT NULL ENABLE);

ALTER TABLE
  "CMS_ANSWERS_GROUP"
MODIFY
  ("ANSWER_GROUP_CODE" NOT NULL ENABLE);

--------------------------------------------------------
--  Constraints for Table CMS_AUDIT_TRAIL
--------------------------------------------------------
ALTER TABLE
  "CMS_AUDIT_TRAIL"
ADD
  CONSTRAINT "CMS_AUDIT_TRAIL_PK" PRIMARY KEY ("AUDIT_TRAIL_CODE") ENABLE;

ALTER TABLE
  "CMS_AUDIT_TRAIL"
MODIFY
  ("CREATED_AT" NOT NULL ENABLE);

ALTER TABLE
  "CMS_AUDIT_TRAIL"
MODIFY
  ("ACTIVITY" NOT NULL ENABLE);

ALTER TABLE
  "CMS_AUDIT_TRAIL"
MODIFY
  ("MENU" NOT NULL ENABLE);

ALTER TABLE
  "CMS_AUDIT_TRAIL"
MODIFY
  ("USERNAME" NOT NULL ENABLE);

ALTER TABLE
  "CMS_AUDIT_TRAIL"
MODIFY
  ("AUDIT_TRAIL_CODE" NOT NULL ENABLE);

--------------------------------------------------------
--  Constraints for Table CMS_LOG_HISTORY_USER
--------------------------------------------------------
ALTER TABLE
  "CMS_LOG_HISTORY_USER"
ADD
  CONSTRAINT "CMS_LOG_HISTORY_USER_PK" PRIMARY KEY ("ID") ENABLE;

ALTER TABLE
  "CMS_LOG_HISTORY_USER"
MODIFY
  ("SURVEY_CHANGE" NOT NULL ENABLE);

ALTER TABLE
  "CMS_LOG_HISTORY_USER"
MODIFY
  ("SURVEY_CODE" NOT NULL ENABLE);

ALTER TABLE
  "CMS_LOG_HISTORY_USER"
MODIFY
  ("USERNAME" NOT NULL ENABLE);

ALTER TABLE
  "CMS_LOG_HISTORY_USER"
MODIFY
  ("ID" NOT NULL ENABLE);

--------------------------------------------------------
--  Constraints for Table CMS_QUESTIONS
--------------------------------------------------------
ALTER TABLE
  "CMS_QUESTIONS"
MODIFY
  ("Q_TYPE" NOT NULL ENABLE);

ALTER TABLE
  "CMS_QUESTIONS"
MODIFY
  ("QUESTION_CODE" NOT NULL ENABLE);

ALTER TABLE
  "CMS_QUESTIONS"
ADD
  PRIMARY KEY ("QUESTION_CODE") ENABLE;

--------------------------------------------------------
--  Constraints for Table CMS_QUESTIONS_GROUP
--------------------------------------------------------
ALTER TABLE
  "CMS_QUESTIONS_GROUP"
ADD
  CONSTRAINT "CMS_QUESTIONS_GROUP_PK" PRIMARY KEY ("ID") ENABLE;

ALTER TABLE
  "CMS_QUESTIONS_GROUP"
MODIFY
  ("QUESTION_CODE" NOT NULL ENABLE);

ALTER TABLE
  "CMS_QUESTIONS_GROUP"
MODIFY
  ("ANSWER_GROUP_CODE" NOT NULL ENABLE);

ALTER TABLE
  "CMS_QUESTIONS_GROUP"
MODIFY
  ("Q_TYPE" NOT NULL ENABLE);

ALTER TABLE
  "CMS_QUESTIONS_GROUP"
MODIFY
  ("Q_ID" NOT NULL ENABLE);

ALTER TABLE
  "CMS_QUESTIONS_GROUP"
MODIFY
  ("Q_PAGE" NOT NULL ENABLE);

ALTER TABLE
  "CMS_QUESTIONS_GROUP"
MODIFY
  ("Q_MANDATORY" NOT NULL ENABLE);

ALTER TABLE
  "CMS_QUESTIONS_GROUP"
MODIFY
  ("A_ID" NOT NULL ENABLE);

ALTER TABLE
  "CMS_QUESTIONS_GROUP"
MODIFY
  ("A_TYPE" NOT NULL ENABLE);

ALTER TABLE
  "CMS_QUESTIONS_GROUP"
MODIFY
  ("SURVEY_CODE" NOT NULL ENABLE);

ALTER TABLE
  "CMS_QUESTIONS_GROUP"
MODIFY
  ("ID" NOT NULL ENABLE);

ALTER TABLE
  "CMS_QUESTIONS_GROUP"
MODIFY
  ("Q_ORDER" NOT NULL ENABLE);

--------------------------------------------------------
--  Constraints for Table CMS_SURVEY
--------------------------------------------------------
ALTER TABLE
  "CMS_SURVEY"
MODIFY
  ("SURVEY_CODE" NOT NULL ENABLE);

ALTER TABLE
  "CMS_SURVEY"
MODIFY
  ("SURVEY_NAME" NOT NULL ENABLE);

ALTER TABLE
  "CMS_SURVEY"
MODIFY
  ("CHANNEL" NOT NULL ENABLE);

ALTER TABLE
  "CMS_SURVEY"
ADD
  PRIMARY KEY ("SURVEY_CODE") ENABLE;

ALTER TABLE
  "CMS_SURVEY"
MODIFY
  ("IS_DELETED" NOT NULL ENABLE);

ALTER TABLE
  "CMS_SURVEY"
MODIFY
  ("ACTIVE_DATE" NOT NULL ENABLE);

ALTER TABLE
  "CMS_SURVEY"
MODIFY
  ("IS_APPROVED" NOT NULL ENABLE);

ALTER TABLE
  "CMS_SURVEY"
MODIFY
  ("IS_ACTIVE" NOT NULL ENABLE);

ALTER TABLE
  "CMS_SURVEY"
MODIFY
  ("IS_JOURNEY" NOT NULL ENABLE);

--------------------------------------------------------
--  Constraints for Table CMS_USERS
--------------------------------------------------------
ALTER TABLE
  "CMS_USERS"
ADD
  CONSTRAINT "CMS_USERS_PK" PRIMARY KEY ("USERNAME", "ID") ENABLE;

ALTER TABLE
  "CMS_USERS"
MODIFY
  ("USERNAME" NOT NULL ENABLE);

ALTER TABLE
  "CMS_USERS"
MODIFY
  ("EMAIL" NOT NULL ENABLE);

ALTER TABLE
  "CMS_USERS"
MODIFY
  ("ID" NOT NULL ENABLE);

--------------------------------------------------------
--  Constraints for Table CMS_USERS_ROLES
--------------------------------------------------------
ALTER TABLE
  "CMS_USERS_ROLES"
MODIFY
  ("ID" NOT NULL ENABLE);

ALTER TABLE
  "CMS_USERS_ROLES"
MODIFY
  ("NAME" NOT NULL ENABLE);

ALTER TABLE
  "CMS_USERS_ROLES"
ADD
  CONSTRAINT "CMS_USERS_ROLES_PK" PRIMARY KEY ("ID") ENABLE;

--------------------------------------------------------
--  Constraints for Table CMS_USERS_ROLES_GROUP
--------------------------------------------------------
ALTER TABLE
  "CMS_USERS_ROLES_GROUP"
MODIFY
  ("ID" NOT NULL ENABLE);

ALTER TABLE
  "CMS_USERS_ROLES_GROUP"
MODIFY
  ("USER_ID" NOT NULL ENABLE);

ALTER TABLE
  "CMS_USERS_ROLES_GROUP"
MODIFY
  ("ROLE_ID" NOT NULL ENABLE);

ALTER TABLE
  "CMS_USERS_ROLES_GROUP"
ADD
  CONSTRAINT "CMS_USERS_ROLES_GROUP_PK" PRIMARY KEY ("ID") ENABLE;