--------------------------------------------------------
--  File created - Thursday-February-04-2021   
--------------------------------------------------------
REM INSERTING into CMS_ANSWERS
SET DEFINE OFF;
Insert into CMS_ANSWERS (ANSWER_CODE,A_TEXT_EN,A_TEXT_IND,CREATED_AT,CREATED_BY) values ('1','<b>Very bad</b><br>Which area(s) could we further improve?<br>(Select all that apply)','<b>Sangat buruk</b><br>Apakah yang dapat kita tingkatkan lebih baik?<br>(Pilih semua yang sesuai)',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS (ANSWER_CODE,A_TEXT_EN,A_TEXT_IND,CREATED_AT,CREATED_BY) values ('2','<b>Bad</b><br>Which area(s) could we further improve?<br>(Select all that apply)','<b>Buruk</b><br>Apakah yang dapat kita tingkatkan lebih baik?<br>(Pilih semua yang sesuai)',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS (ANSWER_CODE,A_TEXT_EN,A_TEXT_IND,CREATED_AT,CREATED_BY) values ('3','<b>Enough</b><br>Which area(s) could we further improve?<br>(Select all that apply)','<b>Cukup</b><br>Apakah yang dapat kita tingkatkan lebih baik?<br>(Pilih semua yang sesuai)',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS (ANSWER_CODE,A_TEXT_EN,A_TEXT_IND,CREATED_AT,CREATED_BY) values ('4','<b>Good</b><br>Thank you. Which area(s) that we have done well?<br>(Select all that apply)','<b>Bagus</b><br>Terima kasih. Apakah yang telah kami lakukan dengan baik?<br>(Pilih semua yang sesuai)',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS (ANSWER_CODE,A_TEXT_EN,A_TEXT_IND,CREATED_AT,CREATED_BY) values ('5','<b>Very good</b><br>Thank you. Which area(s) that we have done well?<br>(Select all that apply)','<b>Sangat bagus</b><br>Terima kasih. Apakah yang telah kami lakukan dengan baik?<br>(Pilih semua yang sesuai)',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS (ANSWER_CODE,A_TEXT_EN,A_TEXT_IND,CREATED_AT,CREATED_BY) values ('6','Functionality','Fungsi',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS (ANSWER_CODE,A_TEXT_EN,A_TEXT_IND,CREATED_AT,CREATED_BY) values ('7','Aesthetics','Estetika',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS (ANSWER_CODE,A_TEXT_EN,A_TEXT_IND,CREATED_AT,CREATED_BY) values ('8','Information Quality','Kualitas Informasi',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS (ANSWER_CODE,A_TEXT_EN,A_TEXT_IND,CREATED_AT,CREATED_BY) values ('9','Ease of Use','Kemudahan Penggunaan',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS (ANSWER_CODE,A_TEXT_EN,A_TEXT_IND,CREATED_AT,CREATED_BY) values ('10','Language Clarity','Kejelasan Bahasa',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS (ANSWER_CODE,A_TEXT_EN,A_TEXT_IND,CREATED_AT,CREATED_BY) values ('11','Other','Lainnya',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS (ANSWER_CODE,A_TEXT_EN,A_TEXT_IND,CREATED_AT,CREATED_BY) values ('12','Could you share with us which area(s) that we could further improve?','Apakah yang dapat kami tingkatkan lebih baik?',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS (ANSWER_CODE,A_TEXT_EN,A_TEXT_IND,CREATED_AT,CREATED_BY) values ('13','Thank you. Could you share with us which area(s) that we have done well','Terima kasih. Apakah yang telah kami lakukan dengan baik?',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS (ANSWER_CODE,A_TEXT_EN,A_TEXT_IND,CREATED_AT,CREATED_BY) values ('14','','',to_date('05-01-2021','DD-MM-RRRR'),null);
REM INSERTING into CMS_ANSWERS_GROUP
SET DEFINE OFF;
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('2','9','multiple_choice','Kemudahan Penggunaan',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('2','10','multiple_choice','Kejelasan Bahasa',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('2','11','multiple_choice','Lainnya',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('3','12','sliderbar','0',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('3','12','sliderbar','1',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('3','12','sliderbar','2',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('3','12','sliderbar','3',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('1','3','rating_scale','3',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('1','1','rating_scale','1',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('1','2','rating_scale','2',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('1','4','rating_scale','4',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('1','5','rating_scale','5',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('2','6','multiple_choice','Fungsi',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('2','7','multiple_choice','Estetika',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('2','8','multiple_choice','Kualitas Informasi',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('3','12','sliderbar','4',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('3','12','sliderbar','5',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('3','12','sliderbar','6',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('3','12','sliderbar','7',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('3','13','sliderbar','8',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('3','13','sliderbar','9',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('3','13','sliderbar','10',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_ANSWERS_GROUP (ANSWER_GROUP_CODE,ANSWER_CODE,A_TYPE,A_VALUE,CREATED_AT,CREATED_BY) values ('4','14','free_text','',to_date('05-01-2021','DD-MM-RRRR'),null);
REM INSERTING into CMS_QUESTIONS
SET DEFINE OFF;
Insert into CMS_QUESTIONS (QUESTION_CODE,Q_TYPE,Q_TEXT_EN,Q_TEXT_IND,CREATED_AT,CREATED_BY) values ('1','string','How would you rate your [DYNAMIC_PARAMETER1] through [DYNAMIC_PARAMETER2]?','Bagaimana pengalaman Anda melakukan [PARAMETER_DINAMIS1] menggunakan [PARAMETER_DINAMIS2]?',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_QUESTIONS (QUESTION_CODE,Q_TYPE,Q_TEXT_EN,Q_TEXT_IND,CREATED_AT,CREATED_BY) values ('2','string','How likely are you to recommend [DYNAMIC_PARAMETER1] through our [DYNAMIC_PARAMETER2] to your friends or family?','Seberapa besar kemungkinan Anda merekomendasikan [PARAMETER_DINAMIS1] melalui [PARAMETER_DINAMIS2] ke teman atau keluarga Anda?',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_QUESTIONS (QUESTION_CODE,Q_TYPE,Q_TEXT_EN,Q_TEXT_IND,CREATED_AT,CREATED_BY) values ('3','string','How would you rate your [DYNAMIC_PARAMETER2] experience?','Bagaimana pengalaman Anda menggunakan [PARAMETER_DINAMIS2]?',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_QUESTIONS (QUESTION_CODE,Q_TYPE,Q_TEXT_EN,Q_TEXT_IND,CREATED_AT,CREATED_BY) values ('4','string','How likely are you to recommend [DYNAMIC_PARAMETER2] to your friends or family?','Seberapa besar kemungkinan Anda merekomendasikan [PARAMETER_DINAMIS2] ke teman atau keluarga Anda?',to_date('05-01-2021','DD-MM-RRRR'),null);
Insert into CMS_QUESTIONS (QUESTION_CODE,Q_TYPE,Q_TEXT_EN,Q_TEXT_IND,CREATED_AT,CREATED_BY) values ('5','string','','',to_date('02-02-0021','DD-MM-RRRR'),null);
REM INSERTING into CMS_QUESTIONS_GROUP
SET DEFINE OFF;
Insert into CMS_QUESTIONS_GROUP (SURVEY_CODE,QUESTION_CODE,ANSWER_GROUP_CODE,Q_TYPE,Q_ID,Q_PAGE,Q_MANDATORY,A_ID,A_TYPE,A_DEFAULT,A_MIN_SCALE_TEXT_EN,A_MIN_SCALE_TEXT_ID,A_MAX_SCALE_TEXT_EN,A_MAX_SCALE_TEXT_ID,Q_ORDER,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,ID) values ('1','1','1','string','qu_1_1','1','0','ans_1_1','rating_scale',null,null,null,null,null,'1',to_date('05-01-2021','DD-MM-RRRR'),'05-01-2021',null,null,'1');
Insert into CMS_QUESTIONS_GROUP (SURVEY_CODE,QUESTION_CODE,ANSWER_GROUP_CODE,Q_TYPE,Q_ID,Q_PAGE,Q_MANDATORY,A_ID,A_TYPE,A_DEFAULT,A_MIN_SCALE_TEXT_EN,A_MIN_SCALE_TEXT_ID,A_MAX_SCALE_TEXT_EN,A_MAX_SCALE_TEXT_ID,Q_ORDER,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,ID) values ('1','5','2','string','qu_1_2','1','0','ans_1_2','multiple_choice',null,null,null,null,null,'2',to_date('05-01-2021','DD-MM-RRRR'),'05-01-2021',null,null,'2');
Insert into CMS_QUESTIONS_GROUP (SURVEY_CODE,QUESTION_CODE,ANSWER_GROUP_CODE,Q_TYPE,Q_ID,Q_PAGE,Q_MANDATORY,A_ID,A_TYPE,A_DEFAULT,A_MIN_SCALE_TEXT_EN,A_MIN_SCALE_TEXT_ID,A_MAX_SCALE_TEXT_EN,A_MAX_SCALE_TEXT_ID,Q_ORDER,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,ID) values ('1','2','3','string','qu_2_1','2','0','ans_2_1','sliderbar','0','Not Likely','Mungkin Tidak','Very Likely','Sangat Mungkin','3',to_date('05-01-2021','DD-MM-RRRR'),'05-01-2021',null,null,'3');
Insert into CMS_QUESTIONS_GROUP (SURVEY_CODE,QUESTION_CODE,ANSWER_GROUP_CODE,Q_TYPE,Q_ID,Q_PAGE,Q_MANDATORY,A_ID,A_TYPE,A_DEFAULT,A_MIN_SCALE_TEXT_EN,A_MIN_SCALE_TEXT_ID,A_MAX_SCALE_TEXT_EN,A_MAX_SCALE_TEXT_ID,Q_ORDER,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,ID) values ('1','5','4','string','qu_2_2','2','0','ans_2_2','free_text',null,null,null,null,null,'4',to_date('05-01-2021','DD-MM-RRRR'),'05-01-2021',null,null,'4');
Insert into CMS_QUESTIONS_GROUP (SURVEY_CODE,QUESTION_CODE,ANSWER_GROUP_CODE,Q_TYPE,Q_ID,Q_PAGE,Q_MANDATORY,A_ID,A_TYPE,A_DEFAULT,A_MIN_SCALE_TEXT_EN,A_MIN_SCALE_TEXT_ID,A_MAX_SCALE_TEXT_EN,A_MAX_SCALE_TEXT_ID,Q_ORDER,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,ID) values ('2','3','1','string','qu_1_1','1','0','ans_1_1','rating_scale',null,null,null,null,null,'1',to_date('05-01-2021','DD-MM-RRRR'),'05-01-2021',null,null,'5');
Insert into CMS_QUESTIONS_GROUP (SURVEY_CODE,QUESTION_CODE,ANSWER_GROUP_CODE,Q_TYPE,Q_ID,Q_PAGE,Q_MANDATORY,A_ID,A_TYPE,A_DEFAULT,A_MIN_SCALE_TEXT_EN,A_MIN_SCALE_TEXT_ID,A_MAX_SCALE_TEXT_EN,A_MAX_SCALE_TEXT_ID,Q_ORDER,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,ID) values ('2','5','2','string','qu_1_2','1','0','ans_1_2','multiple_choice',null,null,null,null,null,'2',to_date('05-01-2021','DD-MM-RRRR'),'05-01-2021',null,null,'6');
Insert into CMS_QUESTIONS_GROUP (SURVEY_CODE,QUESTION_CODE,ANSWER_GROUP_CODE,Q_TYPE,Q_ID,Q_PAGE,Q_MANDATORY,A_ID,A_TYPE,A_DEFAULT,A_MIN_SCALE_TEXT_EN,A_MIN_SCALE_TEXT_ID,A_MAX_SCALE_TEXT_EN,A_MAX_SCALE_TEXT_ID,Q_ORDER,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,ID) values ('2','4','3','string','qu_2_1','2','0','ans_2_1','sliderbar','0','Not Likely','Mungkin Tidak','Very Likely','Sangat Mungkin','3',to_date('05-01-2021','DD-MM-RRRR'),'05-01-2021',null,null,'7');
Insert into CMS_QUESTIONS_GROUP (SURVEY_CODE,QUESTION_CODE,ANSWER_GROUP_CODE,Q_TYPE,Q_ID,Q_PAGE,Q_MANDATORY,A_ID,A_TYPE,A_DEFAULT,A_MIN_SCALE_TEXT_EN,A_MIN_SCALE_TEXT_ID,A_MAX_SCALE_TEXT_EN,A_MAX_SCALE_TEXT_ID,Q_ORDER,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,ID) values ('2','5','4','string','qu_2_2','2','0','ans_2_2','free_text',null,null,null,null,null,'4',to_date('05-01-2021','DD-MM-RRRR'),'05-01-2021',null,null,'8');
Insert into CMS_QUESTIONS_GROUP (SURVEY_CODE,QUESTION_CODE,ANSWER_GROUP_CODE,Q_TYPE,Q_ID,Q_PAGE,Q_MANDATORY,A_ID,A_TYPE,A_DEFAULT,A_MIN_SCALE_TEXT_EN,A_MIN_SCALE_TEXT_ID,A_MAX_SCALE_TEXT_EN,A_MAX_SCALE_TEXT_ID,Q_ORDER,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,ID) values ('3','1','1','string','qu_1_1','1','0','ans_1_1','rating_scale',null,null,null,null,null,'1',to_date('05-01-2021','DD-MM-RRRR'),'05-01-2021',null,null,'9');
Insert into CMS_QUESTIONS_GROUP (SURVEY_CODE,QUESTION_CODE,ANSWER_GROUP_CODE,Q_TYPE,Q_ID,Q_PAGE,Q_MANDATORY,A_ID,A_TYPE,A_DEFAULT,A_MIN_SCALE_TEXT_EN,A_MIN_SCALE_TEXT_ID,A_MAX_SCALE_TEXT_EN,A_MAX_SCALE_TEXT_ID,Q_ORDER,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,ID) values ('3','5','2','string','qu_1_2','1','0','ans_1_2','multiple_choice',null,null,null,null,null,'2',to_date('05-01-2021','DD-MM-RRRR'),'05-01-2021',null,null,'10');
Insert into CMS_QUESTIONS_GROUP (SURVEY_CODE,QUESTION_CODE,ANSWER_GROUP_CODE,Q_TYPE,Q_ID,Q_PAGE,Q_MANDATORY,A_ID,A_TYPE,A_DEFAULT,A_MIN_SCALE_TEXT_EN,A_MIN_SCALE_TEXT_ID,A_MAX_SCALE_TEXT_EN,A_MAX_SCALE_TEXT_ID,Q_ORDER,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,ID) values ('3','2','3','string','qu_2_1','2','0','ans_2_1','sliderbar','0','Not Likely','Mungkin Tidak','Very Likely','Sangat Mungkin','3',to_date('05-01-2021','DD-MM-RRRR'),'05-01-2021',null,null,'11');
Insert into CMS_QUESTIONS_GROUP (SURVEY_CODE,QUESTION_CODE,ANSWER_GROUP_CODE,Q_TYPE,Q_ID,Q_PAGE,Q_MANDATORY,A_ID,A_TYPE,A_DEFAULT,A_MIN_SCALE_TEXT_EN,A_MIN_SCALE_TEXT_ID,A_MAX_SCALE_TEXT_EN,A_MAX_SCALE_TEXT_ID,Q_ORDER,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,ID) values ('3','5','4','string','qu_2_2','2','0','ans_2_2','free_text',null,null,null,null,null,'4',to_date('05-01-2021','DD-MM-RRRR'),'05-01-2021',null,null,'12');
Insert into CMS_QUESTIONS_GROUP (SURVEY_CODE,QUESTION_CODE,ANSWER_GROUP_CODE,Q_TYPE,Q_ID,Q_PAGE,Q_MANDATORY,A_ID,A_TYPE,A_DEFAULT,A_MIN_SCALE_TEXT_EN,A_MIN_SCALE_TEXT_ID,A_MAX_SCALE_TEXT_EN,A_MAX_SCALE_TEXT_ID,Q_ORDER,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,ID) values ('4','3','1','string','qu_1_1','1','0','ans_1_1','rating_scale',null,null,null,null,null,'1',to_date('05-01-2021','DD-MM-RRRR'),'05-01-2021',null,null,'13');
Insert into CMS_QUESTIONS_GROUP (SURVEY_CODE,QUESTION_CODE,ANSWER_GROUP_CODE,Q_TYPE,Q_ID,Q_PAGE,Q_MANDATORY,A_ID,A_TYPE,A_DEFAULT,A_MIN_SCALE_TEXT_EN,A_MIN_SCALE_TEXT_ID,A_MAX_SCALE_TEXT_EN,A_MAX_SCALE_TEXT_ID,Q_ORDER,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,ID) values ('4','5','2','string','qu_1_2','1','0','ans_1_2','multiple_choice',null,null,null,null,null,'2',to_date('05-01-2021','DD-MM-RRRR'),'05-01-2021',null,null,'14');
Insert into CMS_QUESTIONS_GROUP (SURVEY_CODE,QUESTION_CODE,ANSWER_GROUP_CODE,Q_TYPE,Q_ID,Q_PAGE,Q_MANDATORY,A_ID,A_TYPE,A_DEFAULT,A_MIN_SCALE_TEXT_EN,A_MIN_SCALE_TEXT_ID,A_MAX_SCALE_TEXT_EN,A_MAX_SCALE_TEXT_ID,Q_ORDER,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,ID) values ('4','4','3','string','qu_2_1','2','0','ans_2_1','sliderbar','0','Not Likely','Mungkin Tidak','Very Likely','Sangat Mungkin','3',to_date('05-01-2021','DD-MM-RRRR'),'05-01-2021',null,null,'15');
Insert into CMS_QUESTIONS_GROUP (SURVEY_CODE,QUESTION_CODE,ANSWER_GROUP_CODE,Q_TYPE,Q_ID,Q_PAGE,Q_MANDATORY,A_ID,A_TYPE,A_DEFAULT,A_MIN_SCALE_TEXT_EN,A_MIN_SCALE_TEXT_ID,A_MAX_SCALE_TEXT_EN,A_MAX_SCALE_TEXT_ID,Q_ORDER,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,ID) values ('4','5','4','string','qu_2_2','2','0','ans_2_2','free_text',null,null,null,null,null,'4',to_date('05-01-2021','DD-MM-RRRR'),'05-01-2021',null,null,'16');
REM INSERTING into CMS_SURVEY
SET DEFINE OFF;
Insert into CMS_SURVEY (SURVEY_CODE,SURVEY_NAME,CHANNEL,IS_APPROVED,IS_ACTIVE,IS_JOURNEY,ACTIVE_DATE,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,DISABLE_AT,DISABLE_BY,APPROVED_AT,APPROVED_BY,IS_DELETED,REJECT_REASON) values ('1','default mytelkomsel journey','1','1','2','1',to_date('05-01-2021','DD-MM-RRRR'),to_date('05-01-2021','DD-MM-RRRR'),null,to_date('05-01-2021','DD-MM-RRRR'),null,null,null,null,null,'0',null);
Insert into CMS_SURVEY (SURVEY_CODE,SURVEY_NAME,CHANNEL,IS_APPROVED,IS_ACTIVE,IS_JOURNEY,ACTIVE_DATE,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,DISABLE_AT,DISABLE_BY,APPROVED_AT,APPROVED_BY,IS_DELETED,REJECT_REASON) values ('2','default mytelkomsel non journey','1','1','2','0',to_date('05-01-2021','DD-MM-RRRR'),to_date('05-01-2021','DD-MM-RRRR'),null,to_date('05-01-2021','DD-MM-RRRR'),null,null,null,null,null,'0',null);
Insert into CMS_SURVEY (SURVEY_CODE,SURVEY_NAME,CHANNEL,IS_APPROVED,IS_ACTIVE,IS_JOURNEY,ACTIVE_DATE,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,DISABLE_AT,DISABLE_BY,APPROVED_AT,APPROVED_BY,IS_DELETED,REJECT_REASON) values ('3','default maxstream journey','23','1','2','1',to_date('05-01-2021','DD-MM-RRRR'),to_date('05-01-2021','DD-MM-RRRR'),null,to_date('05-01-2021','DD-MM-RRRR'),null,null,null,null,null,'0',null);
Insert into CMS_SURVEY (SURVEY_CODE,SURVEY_NAME,CHANNEL,IS_APPROVED,IS_ACTIVE,IS_JOURNEY,ACTIVE_DATE,CREATED_AT,CREATED_BY,UPDATED_AT,UPDATED_BY,DISABLE_AT,DISABLE_BY,APPROVED_AT,APPROVED_BY,IS_DELETED,REJECT_REASON) values ('4','default maxstream non journey','23','1','2','0',to_date('05-01-2021','DD-MM-RRRR'),to_date('05-01-2021','DD-MM-RRRR'),null,to_date('05-01-2021','DD-MM-RRRR'),null,null,null,null,null,'0',null);
REM INSERTING into CMS_USERS
SET DEFINE OFF;
Insert into CMS_USERS (USERNAME,POSITION,EMAIL,PHONE,CREATED_AT,UPDATED_AT,ID) values ('19335256','Administrator','adhityakristy@gmail.com',null,null,null,'1');
Insert into CMS_USERS (USERNAME,POSITION,EMAIL,PHONE,CREATED_AT,UPDATED_AT,ID) values ('54223215','Approval','daniel_a_kristy_x@telkomsel.co.id',null,null,null,'2');
REM INSERTING into CMS_USERS_ROLES
SET DEFINE OFF;
Insert into CMS_USERS_ROLES (ID,NAME) values ('1','admin');
Insert into CMS_USERS_ROLES (ID,NAME) values ('2','approver');
Insert into CMS_USERS_ROLES (ID,NAME) values ('3','requestor');
Insert into CMS_USERS_ROLES (ID,NAME) values ('4','viewer');
REM INSERTING into CMS_USERS_ROLES_GROUP
SET DEFINE OFF;
Insert into CMS_USERS_ROLES_GROUP (ID,USER_ID,ROLE_ID) values ('1','1','1');
Insert into CMS_USERS_ROLES_GROUP (ID,USER_ID,ROLE_ID) values ('2','1','2');
Insert into CMS_USERS_ROLES_GROUP (ID,USER_ID,ROLE_ID) values ('3','1','3');