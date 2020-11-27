<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_ORD
{
    public const TABLE_NAME = 'F_ORD';

    /** @var string Letra */
    public const LETORD = 'F_ORD.LETORD';

    /** @var string Código */
    public const CODORD = 'F_ORD.CODORD';

    /** @var string [L=#0;Pte.#1;En curso#2;Terminado#3;Fact.#4;Fact.Parcial]Estado */
    public const ESTORD = 'F_ORD.ESTORD';

    /** @var string [F=00000]Cliente */
    public const CLIORD = 'F_ORD.CLIORD';

    /** @var string Denominación */
    public const DENORD = 'F_ORD.DENORD';

    /** @var string Descripción */
    public const DESORD = 'F_ORD.DESORD';

    /** @var string Localización */
    public const LOCORD = 'F_ORD.LOCORD';

    /** @var string Fecha de pedido */
    public const FPEORD = 'F_ORD.FPEORD';

    /** @var string Fecha de inicio */
    public const FINORD = 'F_ORD.FINORD';

    /** @var string Fecha de conclusión */
    public const FFIORD = 'F_ORD.FFIORD';

    /** @var string [L=#0;Administración#1;Presupuesto]Tipo de trabajo */
    public const TTRORD = 'F_ORD.TTRORD';

    /** @var string Importe materiales */
    public const MATORD = 'F_ORD.MATORD';

    /** @var string Importe mano de obra */
    public const MOBORD = 'F_ORD.MOBORD';

    /** @var string Porcentaje de índice */
    public const PINORD = 'F_ORD.PINORD';

    /** @var string Índice */
    public const IINORD = 'F_ORD.IINORD';

    /** @var string Coste total */
    public const COSORD = 'F_ORD.COSORD';

    /** @var string Porcentaje de margen */
    public const PMAORD = 'F_ORD.PMAORD';

    /** @var string Margen */
    public const IMAORD = 'F_ORD.IMAORD';

    /** @var string Precio venta */
    public const PVEORD = 'F_ORD.PVEORD';

    /** @var string Nº de factura */
    public const FACORD = 'F_ORD.FACORD';
}
