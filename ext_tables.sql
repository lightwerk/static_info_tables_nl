
CREATE TABLE static_countries (
  cn_short_nl varchar(50) DEFAULT '' NOT NULL,
  cn_official_name_nl varchar(128) DEFAULT '' NOT NULL
);

CREATE TABLE static_currencies (
  cu_name_nl varchar(50) DEFAULT '' NOT NULL,
  cu_sub_name_nl varchar(20) DEFAULT '' NOT NULL
);

CREATE TABLE static_languages (
  lg_name_nl varchar(50) DEFAULT '' NOT NULL
);

CREATE TABLE static_territories (
  tr_name_nl varchar(50) DEFAULT '' NOT NULL
);

CREATE TABLE static_country_zones (
  zn_name_nl varchar(50) DEFAULT '' NOT NULL
);

