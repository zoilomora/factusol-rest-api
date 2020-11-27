<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LPF
{
    public const TABLE_NAME = 'F_LPF';

    /** @var string Nº de serie */
    public const TFRLPF = 'F_LPF.TFRLPF';

    /** @var string [F=000000]Código */
    public const CFRLPF = 'F_LPF.CFRLPF';

    /** @var string [E]Código de la línea */
    public const LINLPF = 'F_LPF.LINLPF';

    /** @var string Importe */
    public const IMPLPF = 'F_LPF.IMPLPF';

    /** @var string Fecha */
    public const FECLPF = 'F_LPF.FECLPF';

    /** @var string Concepto */
    public const CPTLPF = 'F_LPF.CPTLPF';

    /** @var string [E]Contrapartida [E]Contrapartida de (De 0 a 9 : se seleeciona de las 10 opciones de la tabla F_AUT) */
    public const CPALPF = 'F_LPF.CPALPF';

    /** @var string [L=#No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TRALPF = 'F_LPF.TRALPF';

    /** @var string [E]Caja */
    public const CAJLPF = 'F_LPF.CAJLPF';

    /** @var string [E]Posición de la línea de caja */
    public const PCALPF = 'F_LPF.PCALPF';

    public const MULLPF = 'F_LPF.MULLPF';

    public const ANTLPF = 'F_LPF.ANTLPF';
}
