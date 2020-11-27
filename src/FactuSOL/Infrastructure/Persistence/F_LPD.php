<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LPD
{
    public const TABLE_NAME = 'F_LPD';

    /** @var string Código */
    public const CODLPD = 'CODLPD';

    /** @var string [E]POSICION DE LA LÍNEA DE PDA */
    public const POSLPD = 'POSLPD';

    /** @var string Descripción del documento */
    public const DESLPD = 'DESLPD';

    /** @var string Documento */
    public const DOCLPD = 'DOCLPD';

    /** @var string Nº de serie */
    public const SERLPD = 'SERLPD';

    /** @var string [E]PERMITIR CREAR DOCUMENTOS */
    public const NUELPD = 'NUELPD';

    /** @var string [E]PERMITIR MODIFICAR DOCUMENTOS */
    public const MODLPD = 'MODLPD';

    /** @var string [E]PERMITIR BORRAR DOCUMENTOS */
    public const BORLPD = 'BORLPD';

    /** @var string No exportar histórico */
    public const NEXLPD = 'NEXLPD';

    public const CONLPD = 'CONLPD';

    public const COBLPD = 'COBLPD';

    public const MIMLPD = 'MIMLPD';
}
