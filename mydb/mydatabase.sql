CREATE TABLE IF NOT EXISTS public.users
(
    id bigint NOT NULL GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1 ),
    "dateTime" timestamp without time zone,
    "userEmail" text COLLATE pg_catalog."default" NOT NULL,
    "userName" text COLLATE pg_catalog."default",
    "userPassword" text COLLATE pg_catalog."default",
    CONSTRAINT users_pkey PRIMARY KEY (id)
)