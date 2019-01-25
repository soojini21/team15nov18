#File:	feedback.sql

#Create table named upcoming_events

CREATE TABLE if not exists upcoming_events
(
	id varchar(10) primary key,
	up_event_name varchar(50) not null ,
  address varchar(50) not null,
	event_day varchar(50) not null
	

); 

#End upcoming_events.sql
