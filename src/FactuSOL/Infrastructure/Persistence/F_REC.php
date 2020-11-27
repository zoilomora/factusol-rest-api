<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_REC
{
    public const TABLE_NAME = 'F_REC';

    /** @var string Nº de serie */
    public const TIPREC = 'F_REC.TIPREC';

    /** @var string [F=000000]Código */
    public const CODREC = 'F_REC.CODREC';

    /** @var string Nº de vencimiento */
    public const POSREC = 'F_REC.POSREC';

    /** @var string Lugar de expedición */
    public const LOCREC = 'F_REC.LOCREC';

    /** @var string Importe */
    public const IMPREC = 'F_REC.IMPREC';

    /** @var string Fecha de expedición */
    public const FEXREC = 'F_REC.FEXREC';

    /** @var string Fecha de vencimiento */
    public const FVEREC = 'F_REC.FVEREC';

    /** @var string Concepto 1 */
    public const CO1REC = 'F_REC.CO1REC';

    /** @var string Concepto 2 */
    public const CO2REC = 'F_REC.CO2REC';

    /** @var string Nombre de la entidad */
    public const ENTREC = 'F_REC.ENTREC';

    /** @var string Entidad */
    public const CC1REC = 'F_REC.CC1REC';

    /** @var string Oficina */
    public const CC2REC = 'F_REC.CC2REC';

    /** @var string Dígitos de control */
    public const DCCREC = 'F_REC.DCCREC';

    /** @var string Nº de cuenta */
    public const CUEREC = 'F_REC.CUEREC';

    /** @var string [L=#0;Pte.#1;Cobrado#2;Cobrado parcial]Estado */
    public const ESTREC = 'F_REC.ESTREC';

    /** @var string [F=00000]Cliente */
    public const CLIREC = 'F_REC.CLIREC';

    /** @var string Nombre */
    public const NOMREC = 'F_REC.NOMREC';

    /** @var string Dirección */
    public const DOMREC = 'F_REC.DOMREC';

    /** @var string Población */
    public const POBREC = 'F_REC.POBREC';

    /** @var string Provincia */
    public const PRVREC = 'F_REC.PRVREC';

    /** @var string Cód. Postal */
    public const CPOREC = 'F_REC.CPOREC';

    /** @var string N.I.F. */
    public const NIFREC = 'F_REC.NIFREC';

    public const DEVREC = 'F_REC.DEVREC';

    public const REMREC = 'F_REC.REMREC';

    public const IBAREC = 'F_REC.IBAREC';

    public const BICREC = 'F_REC.BICREC';
}
