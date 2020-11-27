<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LPD
{
    public const TABLE_NAME = 'F_LPD';

    /** @var string Código */
    public const CODLPD = 'F_LPD.CODLPD';

    /** @var string [E]POSICION DE LA LÍNEA DE PDA */
    public const POSLPD = 'F_LPD.POSLPD';

    /** @var string Descripción del documento */
    public const DESLPD = 'F_LPD.DESLPD';

    /** @var string Documento */
    public const DOCLPD = 'F_LPD.DOCLPD';

    /** @var string Nº de serie */
    public const SERLPD = 'F_LPD.SERLPD';

    /** @var string [E]PERMITIR CREAR DOCUMENTOS */
    public const NUELPD = 'F_LPD.NUELPD';

    /** @var string [E]PERMITIR MODIFICAR DOCUMENTOS */
    public const MODLPD = 'F_LPD.MODLPD';

    /** @var string [E]PERMITIR BORRAR DOCUMENTOS */
    public const BORLPD = 'F_LPD.BORLPD';

    /** @var string No exportar histórico */
    public const NEXLPD = 'F_LPD.NEXLPD';

    public const CONLPD = 'F_LPD.CONLPD';

    public const COBLPD = 'F_LPD.COBLPD';

    public const MIMLPD = 'F_LPD.MIMLPD';
}
