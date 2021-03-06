USE [Aplicaciones_Integradas]
GO
/****** Object:  Table [dbo].[articulo]    Script Date: 22/10/2020 17:54:54 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[articulo](
	[CODIGOP] [varchar](50) NOT NULL,
	[REFERENCIA] [varchar](100) NULL,
	[DESCRIP] [varchar](100) NULL,
	[PCOSTO] [decimal](14, 2) NULL,
	[PVENTA] [decimal](14, 2) NULL,
	[CTA] [varchar](14) NULL,
	[IMPTO] [varchar](12) NULL,
	[UBIC] [varchar](12) NULL,
	[MINIMO] [decimal](14, 2) NULL,
	[ENTRADA] [decimal](14, 2) NULL,
	[SALIDA] [decimal](14, 2) NULL,
	[EXISANT] [decimal](14, 2) NULL,
	[EXISACT] [decimal](14, 2) NULL,
	[PENTRADA] [decimal](14, 2) NULL,
	[PTOTAL] [decimal](14, 2) NULL,
	[FENTRADA] [date] NULL,
	[FSALIDA] [date] NULL,
	[FISICO] [decimal](14, 2) NULL,
	[UNIDAD] [varchar](10) NULL,
	[EMPAQUE] [varchar](20) NULL,
	[DCTO] [varchar](15) NULL,
	[ESTANTE] [varchar](20) NULL,
	[BORRADO] [bit] NULL,
	[CRITICO] [bit] NULL,
	[CUENTA2] [varchar](14) NULL,
	[CUENTA3] [varchar](14) NULL,
	[CUENTA4] [varchar](14) NULL,
	[CUENTA5] [varchar](14) NULL,
	[CUENTA6] [varchar](14) NULL,
	[CUENTA7] [varchar](14) NULL,
	[CUENTA9] [varchar](14) NULL,
	[MAXIMO] [int] NULL,
	[CC] [varchar](50) NULL,
	[REG] [int] IDENTITY(1,1) NOT NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[cia]    Script Date: 22/10/2020 17:54:54 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[cia](
	[NIT] [varchar](20) NULL,
	[RAZON] [varchar](100) NULL,
	[REPLEGAL] [varchar](100) NULL,
	[TELEFONO] [varchar](20) NULL,
	[FAX] [varchar](20) NULL,
	[MAILE] [varchar](70) NULL,
	[DIRECCION] [varchar](100) NULL,
	[BARRIO] [varchar](50) NULL,
	[CIUDAD] [varchar](50) NULL,
	[PAIS] [varchar](50) NULL,
	[WEBP] [varchar](50) NULL,
	[CIIU] [int] NULL,
	[reg] [int] IDENTITY(1,1) NOT NULL,
	[dv] [varchar](4) NULL,
	[clave_te] [varchar](150) NULL,
	[software_id] [varchar](50) NULL,
	[pin] [varchar](5) NULL,
	[resol] [varchar](20) NULL,
	[rinicial] [varchar](9) NULL,
	[rfinal] [varchar](9) NULL,
	[fdesde] [date] NULL,
	[fhasta] [date] NULL,
	[set_pruebas] [varchar](50) NULL,
	[prueba_produ] [varchar](1) NULL,
	[prefi] [varchar](4) NULL,
	[tope] [int] NULL,
	[tope2] [int] NULL,
	[prefi2] [varchar](4) NULL,
	[resoluccion] [varchar](80) NULL,
	[resoluccion2] [varchar](80) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[clientes]    Script Date: 22/10/2020 17:54:54 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[clientes](
	[NItcc] [varchar](50) NULL,
	[dv] [varchar](1) NULL,
	[ciudad] [varchar](50) NULL,
	[Direccion] [varchar](80) NULL,
	[Telefono] [varchar](50) NULL,
	[email] [varchar](50) NULL,
	[ReteFte] [bit] NULL,
	[RteIva] [bit] NULL,
	[rteica] [bit] NULL,
	[retenedor] [bit] NULL,
	[Observacion] [varchar](50) NULL,
	[razon] [varchar](120) NULL,
	[OTRA] [bit] NULL,
	[CIIU] [int] NULL,
	[SIMPLIF] [bit] NULL,
	[CONTACTO] [varchar](80) NULL,
	[VER] [bit] NULL,
	[PLAZO] [int] NULL,
	[reg] [int] IDENTITY(1,1) NOT NULL,
	[ter_tipoid] [varchar](20) NULL,
	[ter_regiva] [varchar](50) NULL,
	[dpto] [varchar](80) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[dfactura]    Script Date: 22/10/2020 17:54:54 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[dfactura](
	[FECHA] [date] NULL,
	[CODPRO] [varchar](20) NULL,
	[CANTIDAD] [decimal](14, 2) NULL,
	[ARTICULO] [varchar](120) NULL,
	[VRUNITARIO] [decimal](14, 2) NULL,
	[VRSTOTAL] [decimal](14, 2) NULL,
	[NOFACTURA] [int] NULL,
	[IVA] [decimal](14, 2) NULL,
	[CODCLIENTE] [varchar](20) NULL,
	[CLIENTE] [varchar](100) NULL,
	[VRIVA] [decimal](14, 0) NULL,
	[PDESC] [int] NULL,
	[TRA] [bit] NULL,
	[INVIMA] [varchar](20) NULL,
	[DIRECCION] [varchar](100) NULL,
	[DEVO] [int] NULL,
	[pcosto] [int] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[efactura]    Script Date: 22/10/2020 17:54:54 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[efactura](
	[nofactura] [int] NULL,
	[direccion] [varchar](150) NULL,
	[fecha] [date] NULL,
	[codcliente] [varchar](20) NULL,
	[cliente] [varchar](100) NULL,
	[observacio] [varchar](120) NULL,
	[vrsubtotal] [decimal](14, 2) NULL,
	[vriva] [decimal](14, 0) NULL,
	[vrdesc] [decimal](14, 0) NULL,
	[pdesc] [int] NULL,
	[vrtotal] [decimal](14, 2) NULL,
	[credito] [bit] NULL,
	[contado] [bit] NULL,
	[plazo] [int] NULL,
	[vencimient] [date] NULL,
	[abono] [int] NULL,
	[saldo] [int] NULL,
	[rtefte] [int] NULL,
	[vrdevo] [int] NULL,
	[ica] [decimal](14, 2) NULL,
	[tra] [bit] NULL,
	[base] [decimal](14, 2) NULL,
	[rteiva] [int] NULL,
	[vnota] [int] NULL,
	[telefono] [varchar](20) NULL,
	[anul] [bit] NULL,
	[op] [varchar](20) NULL,
	[anula] [varchar](40) NULL,
	[oc] [varchar](20) NULL,
	[usuari] [varchar](20) NULL,
	[diahora] [datetime] NULL,
	[realizada] [datetime] NULL,
	[resolucion] [varchar](80) NULL,
	[prefi] [varchar](4) NULL,
	[cufencript] [varchar](120) NULL,
	[nombre_xml] [varchar](120) NULL,
	[validacione] [bit] NULL,
	[validacionv] [bit] NULL,
	[hora] [time](7) NULL,
	[ciudad] [varchar](50) NULL,
	[hora_validacion] [time](7) NULL,
 CONSTRAINT [IX_efactura] UNIQUE CLUSTERED 
(
	[nofactura] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[kardex]    Script Date: 22/10/2020 17:54:54 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[kardex](
	[CODIGO] [varchar](20) NULL,
	[DESCRIP] [varchar](50) NULL,
	[VRUNITC] [decimal](14, 2) NULL,
	[VSTOTALC] [decimal](14, 2) NULL,
	[FECHA] [date] NULL,
	[SALDOP] [decimal](14, 2) NULL,
	[CANTIDADC] [decimal](14, 2) NULL,
	[SALDOA] [decimal](14, 2) NULL,
	[VALORS] [decimal](14, 2) NULL,
	[TIPO] [varchar](1) NULL,
	[VRUNITV] [decimal](14, 2) NULL,
	[VSTOTALV] [decimal](14, 2) NULL,
	[CANTIDADV] [decimal](14, 2) NULL,
	[SALIDAS] [decimal](14, 2) NULL,
	[ENTRADAS] [decimal](14, 2) NULL,
	[DESCRIPC] [varchar](60) NULL,
	[USUARIO] [varchar](20) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[proveedo]    Script Date: 22/10/2020 17:54:54 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[proveedo](
	[NIT] [varchar](20) NOT NULL,
	[NOMBRE] [varchar](150) NOT NULL,
	[DV] [varchar](2) NULL,
	[DCC] [varchar](120) NULL,
	[TEL1] [varchar](20) NULL,
	[TEL2] [varchar](20) NULL,
	[CONTACTO] [varchar](100) NULL,
	[EMAIL] [varchar](150) NULL,
	[CIUDAD] [varchar](50) NULL,
	[RETENEDOR] [bit] NULL,
	[RTEIVA] [bit] NULL,
	[SIMPLIF] [bit] NULL,
	[VER] [varchar](1) NULL,
	[CIIU] [bit] NULL
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[efactura] ADD  DEFAULT ('') FOR [cufencript]
GO
ALTER TABLE [dbo].[efactura] ADD  DEFAULT ('') FOR [nombre_xml]
GO
ALTER TABLE [dbo].[efactura] ADD  DEFAULT ((0)) FOR [validacione]
GO
ALTER TABLE [dbo].[efactura] ADD  DEFAULT ((0)) FOR [validacionv]
GO
ALTER TABLE [dbo].[efactura] ADD  DEFAULT (getdate()) FOR [hora]
GO
ALTER TABLE [dbo].[efactura] ADD  DEFAULT ('') FOR [ciudad]
GO
ALTER TABLE [dbo].[efactura] ADD  DEFAULT (getdate()) FOR [hora_validacion]
GO
