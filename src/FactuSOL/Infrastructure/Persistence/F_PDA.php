<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_PDA
{
    public const TABLE_NAME = 'F_PDA';

    /** @var string Código */
    public const CODPDA = 'F_PDA.CODPDA';

    /** @var string Descripción */
    public const DESPDA = 'F_PDA.DESPDA';

    /** @var string [F=00000]Agente */
    public const AGEPDA = 'F_PDA.AGEPDA';

    /** @var string Nombre de la empresa */
    public const NOMPDA = 'F_PDA.NOMPDA';

    /** @var string Denominación social de la empresa */
    public const DENPDA = 'F_PDA.DENPDA';

    /** @var string Domicilio de la empresa */
    public const DOMPDA = 'F_PDA.DOMPDA';

    /** @var string Cód. Postal de la empresa */
    public const CPOPDA = 'F_PDA.CPOPDA';

    /** @var string Población de la empresa */
    public const POBPDA = 'F_PDA.POBPDA';

    /** @var string Provincia de la empresa */
    public const PROPDA = 'F_PDA.PROPDA';

    /** @var string N.I.F. de la empresa */
    public const NIFPDA = 'F_PDA.NIFPDA';

    /** @var string Prefijo (teléfono) de la empresa */
    public const PTEPDA = 'F_PDA.PTEPDA';

    /** @var string Teléfono de la empresa */
    public const TELPDA = 'F_PDA.TELPDA';

    /** @var string Prefijo (fax) de la empresa */
    public const PFAPDA = 'F_PDA.PFAPDA';

    /** @var string Fax de la empresa */
    public const FAXPDA = 'F_PDA.FAXPDA';

    /** @var string [E]Permisos */
    public const PERPDA = 'F_PDA.PERPDA';

    /** @var string [E]CAMBIAR PRECIOS DE LA PDA */
    public const PREPDA = 'F_PDA.PREPDA';

    /** @var string [E]CAMBIAR DESCUENTO DEL CLIENTE */
    public const DTOPDA = 'F_PDA.DTOPDA';

    /** @var string [E]PERMITIR VENDER ARTÍCULOS SIN CODIFICAR */
    public const ARTPDA = 'F_PDA.ARTPDA';

    /** @var string [E]PERMITIR VENDER SIN STOCK */
    public const STOPDA = 'F_PDA.STOPDA';

    /** @var string [E]SOLICITAR EL NÚMERO DE LOTE EN LAS LÍNEAS DE DETALLE */
    public const LOTPDA = 'F_PDA.LOTPDA';

    /** @var string [E]SOLICITAR LA FECHA DE ENVASADO EN LAS LÍNEAS DE DETALLE */
    public const ENVPDA = 'F_PDA.ENVPDA';

    /** @var string [E]SOLICITAR LA FECHA DE CONSUMO EN LAS LÍNEAS DE DETALLE */
    public const CONPDA = 'F_PDA.CONPDA';

    /** @var string [E]PROFUNDIDAD EN EL HISTÓRICO DE MOVIMIENTOS */
    public const PHIPDA = 'F_PDA.PHIPDA';

    /** @var string Almacén */
    public const ALMPDA = 'F_PDA.ALMPDA';

    /** @var string Tarifa de precios de artículos */
    public const TARPDA = 'F_PDA.TARPDA';

    /** @var string [E]ABRIR LA VENTANA DE EFECTIVO/CAMBIO AL CREAR UNA NOTA */
    public const EFEPDA = 'F_PDA.EFEPDA';

    /** @var string [E]EXPORTAR TODOS LOS CLIENTES A LA PDA */
    public const ECLPDA = 'F_PDA.ECLPDA';

    /** @var string [E]APLICACIÓN EN EXCLUSIVA */
    public const AEXPDA = 'F_PDA.AEXPDA';

    /** @var string Artículo 1 a mostrar */
    public const VA1PDA = 'F_PDA.VA1PDA';

    /** @var string Artículo 2 a mostrar */
    public const VA2PDA = 'F_PDA.VA2PDA';

    /** @var string Artículo 3 a mostrar */
    public const VA3PDA = 'F_PDA.VA3PDA';

    /** @var string Artículo 4 a mostrar */
    public const VA4PDA = 'F_PDA.VA4PDA';

    /** @var string Artículo 5 a mostrar */
    public const VA5PDA = 'F_PDA.VA5PDA';

    /** @var string Fecha */
    public const FECPDA = 'F_PDA.FECPDA';

    /** @var string [E]Contraseña */
    public const CCOPDA = 'F_PDA.CCOPDA';

    public const SCLPDA = 'F_PDA.SCLPDA';

    public const PENPDA = 'F_PDA.PENPDA';

    public const AR1PDA = 'F_PDA.AR1PDA';

    public const AR2PDA = 'F_PDA.AR2PDA';

    public const AR3PDA = 'F_PDA.AR3PDA';

    public const AR4PDA = 'F_PDA.AR4PDA';

    public const AR5PDA = 'F_PDA.AR5PDA';

    public const AR6PDA = 'F_PDA.AR6PDA';

    public const AR7PDA = 'F_PDA.AR7PDA';

    public const AR8PDA = 'F_PDA.AR8PDA';

    public const AR9PDA = 'F_PDA.AR9PDA';

    public const AR10PDA = 'F_PDA.AR10PDA';

    public const ACOPDA = 'F_PDA.ACOPDA';

    public const TRNPDA = 'F_PDA.TRNPDA';

    /** @var string Valor de Stock al Exportar (0 Actual - 1 Disponible) */
    public const VSTPDA = 'F_PDA.VSTPDA';

    public const NPCPDA = 'F_PDA.NPCPDA';
}
