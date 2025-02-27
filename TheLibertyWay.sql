--
-- PostgreSQL database dump
--

-- Dumped from database version 13.11 (Raspbian 13.11-0+deb11u1)
-- Dumped by pg_dump version 13.11 (Raspbian 13.11-0+deb11u1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: feedback; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.feedback (
    id_feedback integer NOT NULL,
    name character varying(50),
    email character varying(100),
    phone character varying(50),
    subject character varying(30),
    message character varying(500),
    id_usuario character varying(10),
    star_rating character varying(1),
    status character varying(25)
);


ALTER TABLE public.feedback OWNER TO postgres;

--
-- Name: feedback_id_feedback_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.feedback_id_feedback_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.feedback_id_feedback_seq OWNER TO postgres;

--
-- Name: feedback_id_feedback_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.feedback_id_feedback_seq OWNED BY public.feedback.id_feedback;


--
-- Name: hotels; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.hotels (
    id_hotel integer NOT NULL,
    hotel character varying(50),
    adultos character varying(2),
    kids character varying(2),
    categoria character varying(50),
    check_in character varying(50),
    check_out character varying(50),
    precio character varying(15),
    id_hotel_user integer
);


ALTER TABLE public.hotels OWNER TO postgres;

--
-- Name: hotels_id_hotel_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.hotels_id_hotel_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.hotels_id_hotel_seq OWNER TO postgres;

--
-- Name: hotels_id_hotel_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.hotels_id_hotel_seq OWNED BY public.hotels.id_hotel;


--
-- Name: newsletter; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.newsletter (
    id_newsletter integer NOT NULL,
    email character varying(100)
);


ALTER TABLE public.newsletter OWNER TO postgres;

--
-- Name: newsletter_id_newsletter_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.newsletter_id_newsletter_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.newsletter_id_newsletter_seq OWNER TO postgres;

--
-- Name: newsletter_id_newsletter_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.newsletter_id_newsletter_seq OWNED BY public.newsletter.id_newsletter;


--
-- Name: payment_receipt; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.payment_receipt (
    id integer NOT NULL,
    id_transaccion character varying(100),
    transaccion_status character varying(10),
    transaccion_currencycode character varying(5),
    transaccion_amount character varying(100),
    id_payee character varying(100),
    payee_email character varying(50),
    id_cliente character varying(100),
    cliente_emailaddress character varying(50),
    cliente_firstname character varying(20),
    cliente_lastname character varying(20),
    cliente_countrycode character varying(5),
    date character varying(100),
    id_tlw character varying(5),
    user_tlw character varying(20),
    status character varying(25)
);


ALTER TABLE public.payment_receipt OWNER TO postgres;

--
-- Name: payment_receipt_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.payment_receipt_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.payment_receipt_id_seq OWNER TO postgres;

--
-- Name: payment_receipt_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.payment_receipt_id_seq OWNED BY public.payment_receipt.id;


--
-- Name: permissions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.permissions (
    id_permissions integer NOT NULL,
    flights character varying(3),
    hotel_rooms character varying(3),
    users character varying(3),
    payments character varying(3),
    feedback character varying(3)
);


ALTER TABLE public.permissions OWNER TO postgres;

--
-- Name: permissions_id_permissions_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.permissions_id_permissions_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.permissions_id_permissions_seq OWNER TO postgres;

--
-- Name: permissions_id_permissions_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.permissions_id_permissions_seq OWNED BY public.permissions.id_permissions;


--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.usuarios (
    id_usuario integer NOT NULL,
    nombre character varying(50),
    apellido character varying(50),
    usuario character varying(50),
    correo_electronico character varying(100),
    telefono character varying(50),
    contrasenia character varying(250),
    rol character varying(10),
    estado character varying(25),
    token character varying(300),
    imagen character varying(100),
    fecha character varying(50),
    tokenpass character varying(100),
    tokencreated character varying(50)
);


ALTER TABLE public.usuarios OWNER TO postgres;

--
-- Name: usuarios_id_usuario_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.usuarios_id_usuario_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuarios_id_usuario_seq OWNER TO postgres;

--
-- Name: usuarios_id_usuario_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.usuarios_id_usuario_seq OWNED BY public.usuarios.id_usuario;


--
-- Name: vuelos; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.vuelos (
    id_vuelo integer NOT NULL,
    aerolinea character varying(50),
    tipo_vuelo character varying(50),
    categoria_vuelo character varying(50),
    lugar_salida character varying(50),
    lugar_destino character varying(50),
    fecha_salida character varying(15),
    fecha_destino character varying(15),
    precio character varying(15),
    id_flight_user integer
);


ALTER TABLE public.vuelos OWNER TO postgres;

--
-- Name: vuelos_id_vuelo_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.vuelos_id_vuelo_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.vuelos_id_vuelo_seq OWNER TO postgres;

--
-- Name: vuelos_id_vuelo_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.vuelos_id_vuelo_seq OWNED BY public.vuelos.id_vuelo;


--
-- Name: feedback id_feedback; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.feedback ALTER COLUMN id_feedback SET DEFAULT nextval('public.feedback_id_feedback_seq'::regclass);


--
-- Name: hotels id_hotel; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hotels ALTER COLUMN id_hotel SET DEFAULT nextval('public.hotels_id_hotel_seq'::regclass);


--
-- Name: newsletter id_newsletter; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.newsletter ALTER COLUMN id_newsletter SET DEFAULT nextval('public.newsletter_id_newsletter_seq'::regclass);


--
-- Name: payment_receipt id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.payment_receipt ALTER COLUMN id SET DEFAULT nextval('public.payment_receipt_id_seq'::regclass);


--
-- Name: permissions id_permissions; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.permissions ALTER COLUMN id_permissions SET DEFAULT nextval('public.permissions_id_permissions_seq'::regclass);


--
-- Name: usuarios id_usuario; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuarios ALTER COLUMN id_usuario SET DEFAULT nextval('public.usuarios_id_usuario_seq'::regclass);


--
-- Name: vuelos id_vuelo; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.vuelos ALTER COLUMN id_vuelo SET DEFAULT nextval('public.vuelos_id_vuelo_seq'::regclass);


--
-- Data for Name: feedback; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.feedback (id_feedback, name, email, phone, subject, message, id_usuario, star_rating, status) FROM stdin;
17	  	w21peraza@gmail.com	+50375068000	Travel experiences	I love it	46	4	\N
18	  	w21peraza@gmail.com	+50375068000	Travel experiences	TLW is the best option for you!	46	5	ACCEPTED
12	Fernando	bakeri9944@nasskar.com	+503 7483-2695	Traveling experiences	I love it!	28	0	ACCEPTED
16	  	w21peraza@gmail.com	+50375068000	Travel experiences	I miss it	46	0	CANCELLED
9	Fernando	bakeri9944@nasskar.com	+503 7483-2695	Traveling experiences	I love it!	28	4	ACCEPTED
10	Fernando	bakeri9944@nasskar.com	+503 7483-2695	Traveling experiences	i love	28	4	ACCEPTED
\.


--
-- Data for Name: hotels; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.hotels (id_hotel, hotel, adultos, kids, categoria, check_in, check_out, precio, id_hotel_user) FROM stdin;
2	Sheraton	1	5	Suite Class	2023-05-04	2023-05-11	600	\N
\.


--
-- Data for Name: newsletter; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.newsletter (id_newsletter, email) FROM stdin;
1	miguelledezma005@gmail.com
2	w21peraza@gmail.com
3	xopagix443@in2reach.com
35	william21peraza@gmail.com
\.


--
-- Data for Name: payment_receipt; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.payment_receipt (id, id_transaccion, transaccion_status, transaccion_currencycode, transaccion_amount, id_payee, payee_email, id_cliente, cliente_emailaddress, cliente_firstname, cliente_lastname, cliente_countrycode, date, id_tlw, user_tlw, status) FROM stdin;
1	68765152RH487782W	COMPLETED	USD	0.10	RRFCKNF9GX63E	lTheLibertyWayl@gmail.com	DJTMCKDXH2S94	payment.details@gmail.com	Payment	Details	US	2023-07-03 23:33:13	\N	10	CHECKING
71	44C079717R5581417	COMPLETED	USD	897.16	RRFCKNF9GX63E	lTheLibertyWayl@gmail.com	ASSJLVZDCBZDY	miguel.ledezma@gmail.com	Miguel	Ledezma	SV	2023-08-17 19:09:53	46	usuario	\N
72	1YE67668H7965921J	COMPLETED	USD	916.20	RRFCKNF9GX63E	lTheLibertyWayl@gmail.com	ASSJLVZDCBZDY	miguel.ledezma@gmail.com	Miguel	Ledezma	SV	2023-08-17 19:11:48	46	usuario	CONFIRMED
74	40113378HV971492P	COMPLETED	USD	2873.53	RRFCKNF9GX63E	lTheLibertyWayl@gmail.com	DJTMCKDXH2S94	payment.details@gmail.com	Payment	Details	US	2023-08-17 19:38:41	61		CONFIRMED
73	22713893VS909242K	COMPLETED	USD	897.16	RRFCKNF9GX63E	lTheLibertyWayl@gmail.com	8SEMHZF4CLHNS	fernando.barrera@gmail.com	Fernando	Barrera	SV	2023-08-17 19:16:58	46	usuario	ON PROCESS
75	5GB417386P8945643	COMPLETED	USD	188.26	RRFCKNF9GX63E	lTheLibertyWayl@gmail.com	DJTMCKDXH2S94	payment.details@gmail.com	Payment	Details	US	2023-08-17 19:41:29	61		CHECKING
\.


--
-- Data for Name: permissions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.permissions (id_permissions, flights, hotel_rooms, users, payments, feedback) FROM stdin;
1	ON	ON	ON	ON	ON
\.


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.usuarios (id_usuario, nombre, apellido, usuario, correo_electronico, telefono, contrasenia, rol, estado, token, imagen, fecha, tokenpass, tokencreated) FROM stdin;
25	Fernando	Barrera	admin	jeniga9361@nasskar.com	+503 7548-2631	8cb2237d0679ca88db6464eac60da96345513964	2	Activo	  	IMG-17.28.46__24.07.2023.png	Jul 13, 2023	  	  
59	\N	\N	barrera1	sandofernan95@gmail.com	+50378512833	a5041499abe0df57f5c39ec8a3082dae5328aa7e	3	Inactivo	343ae8e26ca054cfcc1f6cbfe5781dddc9059adc	IMG-User.png	Aug 17, 2023	\N	\N
32	Theliberty	Way	thelibertyway	thelivertway@gmail.com	+503 7878-7878	8cb2237d0679ca88db6464eac60da96345513964	1	Activo	  	https://lh3.googleusercontent.com/a/AAcHTtfAdil03NBLfYrdyR_0x5ikWp3E29UlovjVjIkDr_4kDw=s96-c	  	  	  
35	Rene	\N	serranouuu	asasasssasas@gmail.com	+503 7896-2587	117f989884c93ad830305deeb3068fe248350c49	2	Inactivo	193b3437a94374579772f3f1a8c8f08381218bf9	IMG-User.png	Jul 27, 2023	\N	\N
50	\N	\N	rene123987	fernando20130072@gmail.com	+50371238932	69a10252c4ed3e4e65b5ad720c0e36a1816d2349	3	Inactivo	f2edcbe307792dde01089478537248d17cba8620	IMG-User.png	Aug 10, 2023	\N	\N
60	\N	\N	rene122454	william1221peraza@gmail.com	+50373153732	69a10252c4ed3e4e65b5ad720c0e36a1816d2349	3	Activo	\N	IMG-User.png	Aug 17, 2023	\N	\N
40	\N	\N	rene12	fernando201@gmail.com	+503-78595858	69a10252c4ed3e4e65b5ad720c0e36a1816d2349	3	Inactivo		IMG-User.png	Aug 10, 2023	\N	\N
42	\N	\N	rene2009	renfe2@gmail.com	+18004190100	69a10252c4ed3e4e65b5ad720c0e36a1816d2349	3	Inactivo		IMG-User.png	Aug 10, 2023	\N	\N
43	\N	\N	serrano122312	212041@santacecilia.edu.sv	+50378969696	69a10252c4ed3e4e65b5ad720c0e36a1816d2349	3	Inactivo		IMG-User.png	Aug 10, 2023	\N	\N
52	Mior	Lear	\N	miorlear@gmail.com	\N	\N	3	Activo	\N	https://lh3.googleusercontent.com/a/AAcHTtdoJ6XcUtP6kbX30xDxeFTwYoUTzLGHTp6uNmq0N9yz5w=s96-c	\N	\N	\N
61	William	Peraza	\N	w1221peraza@gmail.com	\N	\N	3	Activo	\N	https://lh3.googleusercontent.com/a/AAcHTtf8514x0OE9YiljZTxHNvfyrOgpZLHp6OlL2ZXDjg1A=s96-c	\N	\N	\N
46	  	  	usuario	w21peraza@gmail.com	+50375068000	8cb2237d0679ca88db6464eac60da96345513964	3	Activo	abf749051d8b000946c71a2e216e55eeb49cf414	IMG-17.21.01__17.08.2023.png	Aug 10, 2023	  	  
44	  	  	fer.barrera2	sandofernan5@gmail.com	+50378522833	a5041499abe0df57f5c39ec8a3082dae5328aa7e	3	Inactivo	4a0e88cf529fbbdc2c0a995bbe88a0a86212ed8d	IMG-User.png	Aug 10, 2023	  	  
\.


--
-- Data for Name: vuelos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.vuelos (id_vuelo, aerolinea, tipo_vuelo, categoria_vuelo, lugar_salida, lugar_destino, fecha_salida, fecha_destino, precio, id_flight_user) FROM stdin;
17	Avianca	Round-trip	Business Class	Canada	France	2023-05-25	2023-05-31	$700.00	\N
15	Avianca	Round-trip	Business Class	France	Spain	2023-05-01	2023-05-23	499.99	\N
19	Avianca	Round-trip	Tourist Class	Canada	France	2023-05-19	2023-06-02	999.99	\N
18	Avianca	Round-trip	Tourist Class	Canada	France	2023-05-19	2023-05-26	999.99	\N
21	Avianca	Round trip	Business Class	France	Brazil	07-13-2023	07-25-2023	$ 234.99	\N
23	$aerolinea	$tipo_vuelo	$categoria_vuelo	$lugar_salida	$lugar_destino	$fecha_salida	$fecha_destino	$precio	1
24	$aerolinea	$tipo_vuelo	$categoria_vuelo	$lugar_salida	$lugar_destino	$fecha_salida	$fecha_destino	$precio	1
\.


--
-- Name: feedback_id_feedback_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.feedback_id_feedback_seq', 19, true);


--
-- Name: hotels_id_hotel_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.hotels_id_hotel_seq', 5, true);


--
-- Name: newsletter_id_newsletter_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.newsletter_id_newsletter_seq', 35, true);


--
-- Name: payment_receipt_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.payment_receipt_id_seq', 75, true);


--
-- Name: permissions_id_permissions_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.permissions_id_permissions_seq', 1, false);


--
-- Name: usuarios_id_usuario_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.usuarios_id_usuario_seq', 61, true);


--
-- Name: vuelos_id_vuelo_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.vuelos_id_vuelo_seq', 24, true);


--
-- Name: feedback feedback_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.feedback
    ADD CONSTRAINT feedback_pkey PRIMARY KEY (id_feedback);


--
-- Name: hotels hotels_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.hotels
    ADD CONSTRAINT hotels_pkey PRIMARY KEY (id_hotel);


--
-- Name: newsletter newsletter_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.newsletter
    ADD CONSTRAINT newsletter_pkey PRIMARY KEY (id_newsletter);


--
-- Name: payment_receipt payment_receipt_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.payment_receipt
    ADD CONSTRAINT payment_receipt_pkey PRIMARY KEY (id);


--
-- Name: permissions permissions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.permissions
    ADD CONSTRAINT permissions_pkey PRIMARY KEY (id_permissions);


--
-- Name: usuarios usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id_usuario);


--
-- Name: vuelos vuelos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.vuelos
    ADD CONSTRAINT vuelos_pkey PRIMARY KEY (id_vuelo);


--
-- Name: TABLE feedback; Type: ACL; Schema: public; Owner: postgres
--

REVOKE ALL ON TABLE public.feedback FROM postgres;
GRANT SELECT,INSERT,REFERENCES,DELETE,TRIGGER,UPDATE ON TABLE public.feedback TO postgres;


--
-- Name: TABLE hotels; Type: ACL; Schema: public; Owner: postgres
--

REVOKE ALL ON TABLE public.hotels FROM postgres;
GRANT SELECT,INSERT,REFERENCES,DELETE,TRIGGER,UPDATE ON TABLE public.hotels TO postgres;


--
-- Name: TABLE vuelos; Type: ACL; Schema: public; Owner: postgres
--

REVOKE ALL ON TABLE public.vuelos FROM postgres;
GRANT SELECT,INSERT,REFERENCES,DELETE,TRIGGER,UPDATE ON TABLE public.vuelos TO postgres;


--
-- Name: SEQUENCE vuelos_id_vuelo_seq; Type: ACL; Schema: public; Owner: postgres
--

REVOKE ALL ON SEQUENCE public.vuelos_id_vuelo_seq FROM postgres;
GRANT SELECT,UPDATE ON SEQUENCE public.vuelos_id_vuelo_seq TO postgres;


--
-- PostgreSQL database dump complete
--

