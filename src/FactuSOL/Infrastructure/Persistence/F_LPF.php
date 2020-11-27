<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_LPF
{
    public const TABLE_NAME = 'F_LPF';

    /** @var string Nº de serie */
    public const TFRLPF = 'TFRLPF';

    /** @var string [F=000000]Código */
    public const CFRLPF = 'CFRLPF';

    /** @var string [E]Código de la línea */
    public const LINLPF = 'LINLPF';

    /** @var string Importe */
    public const IMPLPF = 'IMPLPF';

    /** @var string Fecha */
    public const FECLPF = 'FECLPF';

    /** @var string Concepto */
    public const CPTLPF = 'CPTLPF';

    /** @var string [E]Contrapartida [E]Contrapartida de (De 0 a 9 : se seleeciona de las 10 opciones de la tabla F_AUT) */
    public const CPALPF = 'CPALPF';

    /** @var string [L=#No traspasado#1;Traspasado]Traspasado a contabilidad */
    public const TRALPF = 'TRALPF';

    /** @var string [E]Caja */
    public const CAJLPF = 'CAJLPF';

    /** @var string [E]Posición de la línea de caja */
    public const PCALPF = 'PCALPF';

    public const MULLPF = 'MULLPF';

    public const ANTLPF = 'ANTLPF';
}
