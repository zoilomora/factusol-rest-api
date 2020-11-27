<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_PDA
{
    public const TABLE_NAME = 'F_PDA';

    /** @var string Código */
    public const CODPDA = 'CODPDA';

    /** @var string Descripción */
    public const DESPDA = 'DESPDA';

    /** @var string [F=00000]Agente */
    public const AGEPDA = 'AGEPDA';

    /** @var string Nombre de la empresa */
    public const NOMPDA = 'NOMPDA';

    /** @var string Denominación social de la empresa */
    public const DENPDA = 'DENPDA';

    /** @var string Domicilio de la empresa */
    public const DOMPDA = 'DOMPDA';

    /** @var string Cód. Postal de la empresa */
    public const CPOPDA = 'CPOPDA';

    /** @var string Población de la empresa */
    public const POBPDA = 'POBPDA';

    /** @var string Provincia de la empresa */
    public const PROPDA = 'PROPDA';

    /** @var string N.I.F. de la empresa */
    public const NIFPDA = 'NIFPDA';

    /** @var string Prefijo (teléfono) de la empresa */
    public const PTEPDA = 'PTEPDA';

    /** @var string Teléfono de la empresa */
    public const TELPDA = 'TELPDA';

    /** @var string Prefijo (fax) de la empresa */
    public const PFAPDA = 'PFAPDA';

    /** @var string Fax de la empresa */
    public const FAXPDA = 'FAXPDA';

    /** @var string [E]Permisos */
    public const PERPDA = 'PERPDA';

    /** @var string [E]CAMBIAR PRECIOS DE LA PDA */
    public const PREPDA = 'PREPDA';

    /** @var string [E]CAMBIAR DESCUENTO DEL CLIENTE */
    public const DTOPDA = 'DTOPDA';

    /** @var string [E]PERMITIR VENDER ARTÍCULOS SIN CODIFICAR */
    public const ARTPDA = 'ARTPDA';

    /** @var string [E]PERMITIR VENDER SIN STOCK */
    public const STOPDA = 'STOPDA';

    /** @var string [E]SOLICITAR EL NÚMERO DE LOTE EN LAS LÍNEAS DE DETALLE */
    public const LOTPDA = 'LOTPDA';

    /** @var string [E]SOLICITAR LA FECHA DE ENVASADO EN LAS LÍNEAS DE DETALLE */
    public const ENVPDA = 'ENVPDA';

    /** @var string [E]SOLICITAR LA FECHA DE CONSUMO EN LAS LÍNEAS DE DETALLE */
    public const CONPDA = 'CONPDA';

    /** @var string [E]PROFUNDIDAD EN EL HISTÓRICO DE MOVIMIENTOS */
    public const PHIPDA = 'PHIPDA';

    /** @var string Almacén */
    public const ALMPDA = 'ALMPDA';

    /** @var string Tarifa de precios de artículos */
    public const TARPDA = 'TARPDA';

    /** @var string [E]ABRIR LA VENTANA DE EFECTIVO/CAMBIO AL CREAR UNA NOTA */
    public const EFEPDA = 'EFEPDA';

    /** @var string [E]EXPORTAR TODOS LOS CLIENTES A LA PDA */
    public const ECLPDA = 'ECLPDA';

    /** @var string [E]APLICACIÓN EN EXCLUSIVA */
    public const AEXPDA = 'AEXPDA';

    /** @var string Artículo 1 a mostrar */
    public const VA1PDA = 'VA1PDA';

    /** @var string Artículo 2 a mostrar */
    public const VA2PDA = 'VA2PDA';

    /** @var string Artículo 3 a mostrar */
    public const VA3PDA = 'VA3PDA';

    /** @var string Artículo 4 a mostrar */
    public const VA4PDA = 'VA4PDA';

    /** @var string Artículo 5 a mostrar */
    public const VA5PDA = 'VA5PDA';

    /** @var string Fecha */
    public const FECPDA = 'FECPDA';

    /** @var string [E]Contraseña */
    public const CCOPDA = 'CCOPDA';

    public const SCLPDA = 'SCLPDA';

    public const PENPDA = 'PENPDA';

    public const AR1PDA = 'AR1PDA';

    public const AR2PDA = 'AR2PDA';

    public const AR3PDA = 'AR3PDA';

    public const AR4PDA = 'AR4PDA';

    public const AR5PDA = 'AR5PDA';

    public const AR6PDA = 'AR6PDA';

    public const AR7PDA = 'AR7PDA';

    public const AR8PDA = 'AR8PDA';

    public const AR9PDA = 'AR9PDA';

    public const AR10PDA = 'AR10PDA';

    public const ACOPDA = 'ACOPDA';

    public const TRNPDA = 'TRNPDA';

    /** @var string Valor de Stock al Exportar (0 Actual - 1 Disponible) */
    public const VSTPDA = 'VSTPDA';

    public const NPCPDA = 'NPCPDA';
}
