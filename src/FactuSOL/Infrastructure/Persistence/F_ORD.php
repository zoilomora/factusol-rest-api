<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_ORD
{
    public const TABLE_NAME = 'F_ORD';

    /** @var string Letra */
    public const LETORD = 'LETORD';

    /** @var string Código */
    public const CODORD = 'CODORD';

    /** @var string [L=#0;Pte.#1;En curso#2;Terminado#3;Fact.#4;Fact.Parcial]Estado */
    public const ESTORD = 'ESTORD';

    /** @var string [F=00000]Cliente */
    public const CLIORD = 'CLIORD';

    /** @var string Denominación */
    public const DENORD = 'DENORD';

    /** @var string Descripción */
    public const DESORD = 'DESORD';

    /** @var string Localización */
    public const LOCORD = 'LOCORD';

    /** @var string Fecha de pedido */
    public const FPEORD = 'FPEORD';

    /** @var string Fecha de inicio */
    public const FINORD = 'FINORD';

    /** @var string Fecha de conclusión */
    public const FFIORD = 'FFIORD';

    /** @var string [L=#0;Administración#1;Presupuesto]Tipo de trabajo */
    public const TTRORD = 'TTRORD';

    /** @var string Importe materiales */
    public const MATORD = 'MATORD';

    /** @var string Importe mano de obra */
    public const MOBORD = 'MOBORD';

    /** @var string Porcentaje de índice */
    public const PINORD = 'PINORD';

    /** @var string Índice */
    public const IINORD = 'IINORD';

    /** @var string Coste total */
    public const COSORD = 'COSORD';

    /** @var string Porcentaje de margen */
    public const PMAORD = 'PMAORD';

    /** @var string Margen */
    public const IMAORD = 'IMAORD';

    /** @var string Precio venta */
    public const PVEORD = 'PVEORD';

    /** @var string Nº de factura */
    public const FACORD = 'FACORD';
}
