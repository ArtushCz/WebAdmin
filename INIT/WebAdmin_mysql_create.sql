CREATE TABLE `MENU_COLLECTION` (
	`MC_ID` int NOT NULL AUTO_INCREMENT UNIQUE,
	`MC_NAME` varchar(255) NOT NULL AUTO_INCREMENT UNIQUE,
	`MC_RESTRICTIONS_ID` int(255) NOT NULL,
	PRIMARY KEY (`MC_ID`)
);

CREATE TABLE `RESTRICTIONS_ROLES` (
	`R_ID` int NOT NULL AUTO_INCREMENT UNIQUE,
	`RI_ID ` int NOT NULL,
	PRIMARY KEY (`R_ID`)
);

CREATE TABLE `RESTRICTION_ROLE_ITEMS` (
	`RI_ID` int NOT NULL,
	`RI_ROLE_ID` int NOT NULL,
	PRIMARY KEY (`RI_ID`)
);

CREATE TABLE `MENU_ITEM` (
	`MI_ID` int NOT NULL AUTO_INCREMENT,
	`MI_MC_ID` int NOT NULL,
	`MI_RESTRICTION_ID` int NOT NULL,
	`MI_NAME` varchar(255) NOT NULL,
	`MI_DESC` varchar(255) NOT NULL,
	`MI_PAGE_ID` int NOT NULL,
	PRIMARY KEY (`MI_ID`)
);

CREATE TABLE `PAGE` (
	`P_ID` int NOT NULL AUTO_INCREMENT,
	`P_HEADER` varchar(255) NOT NULL,
	`P_BODY` TEXT NOT NULL,
	PRIMARY KEY (`P_ID`)
);

CREATE TABLE `PAGE_ARTICLE` (
	`PA_ID` int NOT NULL AUTO_INCREMENT,
	`PA_P_ID` int NOT NULL AUTO_INCREMENT,
	`PA_HEADER` varchar(255) NOT NULL,
	`PA_BODY` TEXT NOT NULL,
	`PA_SYS_INSERT_TIME` TIMESTAMP NOT NULL,
	`PA_SYS_UPDATE_TIME` TIMESTAMP NOT NULL,
	`PA_SYS_UPDATE_BY` int NOT NULL,
	PRIMARY KEY (`PA_ID`)
);

CREATE TABLE `ROLES` (
	`R_ID` int NOT NULL AUTO_INCREMENT,
	`R_NAME` varchar(255) NOT NULL,
	PRIMARY KEY (`R_ID`)
);

CREATE TABLE `USER` (
	`U_ID` int NOT NULL AUTO_INCREMENT,
	`U_LOGIN` varchar(255) NOT NULL UNIQUE,
	`U_NAME` varchar(255) NOT NULL,
	`U_PASSWORD` varchar(255) NOT NULL,
	PRIMARY KEY (`U_ID`)
);

CREATE TABLE `USER_ROLES` (
	`UR_ID` int NOT NULL AUTO_INCREMENT,
	`UR_U_ID` int NOT NULL AUTO_INCREMENT,
	`UR_R_ID` int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`UR_ID`)
);

CREATE TABLE `USER_ADDRESS` (
	`UA_U_ID` int NOT NULL,
	`UA_CITY` varchar(255) NOT NULL,
	`UA_STREET` varchar(255) NOT NULL,
	`UA_STREET_NM` varchar(255) NOT NULL,
	`UA_PSC` varchar(255) NOT NULL,
	PRIMARY KEY (`UA_U_ID`)
);

CREATE TABLE `USER_CONTACT` (
	`UC_U_ID` int NOT NULL,
	`UC_EMAIL` varchar(255) NOT NULL UNIQUE,
	`UC_PHONE` varchar(255) NOT NULL,
	PRIMARY KEY (`UC_U_ID`)
);

CREATE TABLE `GALLERY` (
	`G_ID` int NOT NULL AUTO_INCREMENT,
	`G_BASE_ROOT` int NOT NULL AUTO_INCREMENT,
	`G_FOLDERS_ID` int NOT NULL,
	`G_NAME` int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`G_ID`)
);

CREATE TABLE `GALLERY_FOLDERS` (
	`GF_ID` int NOT NULL AUTO_INCREMENT,
	`GF_PATH` varchar(255) NOT NULL UNIQUE,
	`GF_WEB_TEXT` varchar(255) NOT NULL,
	`GF_POSITION` int NOT NULL,
	PRIMARY KEY (`GF_ID`)
);

CREATE TABLE `GALLERY_IMAGE_LIST` (
	`GIL_ID` int NOT NULL AUTO_INCREMENT,
	`GIL_GF_ID` int NOT NULL,
	`GIL_FILE_NAME` varchar(255) NOT NULL,
	`GIL_WEB_NAME` varchar(255) NOT NULL,
	PRIMARY KEY (`GIL_ID`)
);

CREATE TABLE `GALLERY_IMEAGE_TEMPLATE` (
	`GIT_ID` int NOT NULL AUTO_INCREMENT,
	`GIT_GIL_ID` int NOT NULL,
	`GIT_NAME` varchar(255) NOT NULL,
	PRIMARY KEY (`GIT_ID`)
);

CREATE TABLE `GALLERY_FOLDER_RELATION` (
	`GFR_ID` int NOT NULL AUTO_INCREMENT,
	`GFR_PARENT` int NOT NULL,
	`GFR_CHILD` int NOT NULL,
	PRIMARY KEY (`GFR_ID`)
);

ALTER TABLE `MENU_COLLECTION` ADD CONSTRAINT `MENU_COLLECTION_fk0` FOREIGN KEY (`MC_RESTRICTIONS_ID`) REFERENCES `RESTRICTIONS_ROLES`(`R_ID`);

ALTER TABLE `RESTRICTIONS_ROLES` ADD CONSTRAINT `RESTRICTIONS_ROLES_fk0` FOREIGN KEY (`RI_ID `) REFERENCES `RESTRICTION_ROLE_ITEMS`(`RI_ID`);

ALTER TABLE `RESTRICTION_ROLE_ITEMS` ADD CONSTRAINT `RESTRICTION_ROLE_ITEMS_fk0` FOREIGN KEY (`RI_ROLE_ID`) REFERENCES `ROLES`(`R_ID`);

ALTER TABLE `MENU_ITEM` ADD CONSTRAINT `MENU_ITEM_fk0` FOREIGN KEY (`MI_MC_ID`) REFERENCES `MENU_COLLECTION`(`MC_ID`);

ALTER TABLE `MENU_ITEM` ADD CONSTRAINT `MENU_ITEM_fk1` FOREIGN KEY (`MI_RESTRICTION_ID`) REFERENCES `RESTRICTIONS_ROLES`(`R_ID`);

ALTER TABLE `MENU_ITEM` ADD CONSTRAINT `MENU_ITEM_fk2` FOREIGN KEY (`MI_PAGE_ID`) REFERENCES `PAGE`(`P_ID`);

ALTER TABLE `PAGE_ARTICLE` ADD CONSTRAINT `PAGE_ARTICLE_fk0` FOREIGN KEY (`PA_P_ID`) REFERENCES `PAGE`(`P_ID`);

ALTER TABLE `PAGE_ARTICLE` ADD CONSTRAINT `PAGE_ARTICLE_fk1` FOREIGN KEY (`PA_SYS_UPDATE_BY`) REFERENCES `USER`(`U_ID`);

ALTER TABLE `USER_ROLES` ADD CONSTRAINT `USER_ROLES_fk0` FOREIGN KEY (`UR_U_ID`) REFERENCES `USER`(`U_ID`);

ALTER TABLE `USER_ROLES` ADD CONSTRAINT `USER_ROLES_fk1` FOREIGN KEY (`UR_R_ID`) REFERENCES `ROLES`(`R_ID`);

ALTER TABLE `USER_ADDRESS` ADD CONSTRAINT `USER_ADDRESS_fk0` FOREIGN KEY (`UA_U_ID`) REFERENCES `USER`(`U_ID`);

ALTER TABLE `USER_CONTACT` ADD CONSTRAINT `USER_CONTACT_fk0` FOREIGN KEY (`UC_U_ID`) REFERENCES `USER`(`U_ID`);

ALTER TABLE `GALLERY` ADD CONSTRAINT `GALLERY_fk0` FOREIGN KEY (`G_FOLDERS_ID`) REFERENCES `GALLERY_FOLDERS`(`GF_ID`);

ALTER TABLE `GALLERY_IMAGE_LIST` ADD CONSTRAINT `GALLERY_IMAGE_LIST_fk0` FOREIGN KEY (`GIL_GF_ID`) REFERENCES `GALLERY_FOLDERS`(`GF_ID`);

ALTER TABLE `GALLERY_IMEAGE_TEMPLATE` ADD CONSTRAINT `GALLERY_IMEAGE_TEMPLATE_fk0` FOREIGN KEY (`GIT_GIL_ID`) REFERENCES `GALLERY_IMAGE_LIST`(`GIL_ID`);

ALTER TABLE `GALLERY_FOLDER_RELATION` ADD CONSTRAINT `GALLERY_FOLDER_RELATION_fk0` FOREIGN KEY (`GFR_PARENT`) REFERENCES `GALLERY_FOLDERS`(`GF_ID`);

ALTER TABLE `GALLERY_FOLDER_RELATION` ADD CONSTRAINT `GALLERY_FOLDER_RELATION_fk1` FOREIGN KEY (`GFR_CHILD`) REFERENCES `GALLERY_FOLDERS`(`GF_ID`);

