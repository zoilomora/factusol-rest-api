<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_REC
{
    public const TABLE_NAME = 'F_REC';

    /** @var string Nº de serie */
    public const TIPREC = 'TIPREC';

    /** @var string [F=000000]Código */
    public const CODREC = 'CODREC';

    /** @var string Nº de vencimiento */
    public const POSREC = 'POSREC';

    /** @var string Lugar de expedición */
    public const LOCREC = 'LOCREC';

    /** @var string Importe */
    public const IMPREC = 'IMPREC';

    /** @var string Fecha de expedición */
    public const FEXREC = 'FEXREC';

    /** @var string Fecha de vencimiento */
    public const FVEREC = 'FVEREC';

    /** @var string Concepto 1 */
    public const CO1REC = 'CO1REC';

    /** @var string Concepto 2 */
    public const CO2REC = 'CO2REC';

    /** @var string Nombre de la entidad */
    public const ENTREC = 'ENTREC';

    /** @var string Entidad */
    public const CC1REC = 'CC1REC';

    /** @var string Oficina */
    public const CC2REC = 'CC2REC';

    /** @var string Dígitos de control */
    public const DCCREC = 'DCCREC';

    /** @var string Nº de cuenta */
    public const CUEREC = 'CUEREC';

    /** @var string [L=#0;Pte.#1;Cobrado#2;Cobrado parcial]Estado */
    public const ESTREC = 'ESTREC';

    /** @var string [F=00000]Cliente */
    public const CLIREC = 'CLIREC';

    /** @var string Nombre */
    public const NOMREC = 'NOMREC';

    /** @var string Dirección */
    public const DOMREC = 'DOMREC';

    /** @var string Población */
    public const POBREC = 'POBREC';

    /** @var string Provincia */
    public const PRVREC = 'PRVREC';

    /** @var string Cód. Postal */
    public const CPOREC = 'CPOREC';

    /** @var string N.I.F. */
    public const NIFREC = 'NIFREC';

    public const DEVREC = 'DEVREC';

    public const REMREC = 'REMREC';

    public const IBAREC = 'IBAREC';

    public const BICREC = 'BICREC';
}
