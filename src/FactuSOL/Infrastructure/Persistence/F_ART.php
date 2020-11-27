<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_ART
{
    public const TABLE_NAME = 'F_ART';

    /** @var string Código */
    public const CODART = 'CODART';

    /** @var string Equivalente */
    public const EQUART = 'EQUART';

    /** @var string Código corto */
    public const CCOART = 'CCOART';

    /** @var string Familia */
    public const FAMART = 'FAMART';

    /** @var string Descripcion general */
    public const DESART = 'DESART';

    /** @var string [E]Descripción para etiquetas */
    public const DEEART = 'DEEART';

    /** @var string [E]Descripción para tickes */
    public const DETART = 'DETART';

    /** @var string Proveedor habitual */
    public const PHAART = 'PHAART';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Tipo de IVA */
    public const TIVART = 'TIVART';

    /** @var string Precio de costo */
    public const PCOART = 'PCOART';

    /** @var string Descuento 1 */
    public const DT0ART = 'DT0ART';

    /** @var string Descuento 2 */
    public const DT1ART = 'DT1ART';

    /** @var string Descuento 3 */
    public const DT2ART = 'DT2ART';

    /** @var string Fecha de alta */
    public const FALART = 'FALART';

    /** @var string Máximo descuento aplicable */
    public const MDAART = 'MDAART';

    /** @var string Ubicación en el almacén */
    public const UBIART = 'UBIART';

    /** @var string Unidades en línea */
    public const UELART = 'UELART';

    /** @var string Unidades por palets */
    public const UPPART = 'UPPART';

    /** @var string Dimensiones */
    public const DIMART = 'DIMART';

    /** @var string Mensaje emergente */
    public const MEMART = 'MEMART';

    /** @var string Observaciones */
    public const OBSART = 'OBSART';

    /** @var string [E]No permitir utilzar el art. */
    public const NPUART = 'NPUART';

    /** @var string [E]No imprimir en ningun listado */
    public const NIAART = 'NIAART';

    /** @var string [E]Art. compuesto */
    public const COMART = 'COMART';

    /** @var string Campo Programable 1 */
    public const CP1ART = 'CP1ART';

    /** @var string Campo Programable 2 */
    public const CP2ART = 'CP2ART';

    /** @var string Campo Programable 3 */
    public const CP3ART = 'CP3ART';

    /** @var string Descripción larga */
    public const DLAART = 'DLAART';

    /** @var string Importe de portes por unidad */
    public const IPUART = 'IPUART';

    /** @var string Cuenta contable para ventas */
    public const NCCART = 'NCCART';

    /** @var string Cuenta contable para compras */
    public const CUCART = 'CUCART';

    /** @var string Cantidad por defecto en las salidas */
    public const CANART = 'CANART';

    /** @var string [E]Imagen */
    public const IMGART = 'IMGART';

    /** @var string [E]Subir a internet */
    public const SUWART = 'SUWART';

    /** @var string [E]Descripción web */
    public const DEWART = 'DEWART';

    /** @var string [E]Mensaje emergente web */
    public const MEWART = 'MEWART';

    /** @var string [E]Controlar stock (web) */
    public const CSTART = 'CSTART';

    /** @var string [E]Imagen web */
    public const IMWART = 'IMWART';

    /** @var string [E]Control de stock */
    public const STOART = 'STOART';

    /** @var string Fecha de última modificación */
    public const FUMART = 'FUMART';

    /** @var string Peso */
    public const PESART = 'PESART';

    /** @var string Fabricante */
    public const FTEART = 'FTEART';

    /** @var string Artículo concatenado */
    public const ACOART = 'ACOART';

    /** @var string Garantía */
    public const GARART = 'GARART';

    /** @var string Unidad de medida */
    public const UMEART = 'UMEART';

    /** @var string [L=#0;Sí#1;No]Traspasar el artículo a MovilSol */
    public const TMOART = 'TMOART';

    /** @var string [E]Contraseña */
    public const CONART = 'CONART';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Tipo de IVA 2º periodo */
    public const TIV2ART = 'TIV2ART';

    /** @var string Primera descripción auxiliar */
    public const DE1ART = 'DE1ART';

    /** @var string Segunda descripción auxiliar */
    public const DE2ART = 'DE2ART';

    /** @var string Tercera descripción auxiliar */
    public const DE3ART = 'DE3ART';

    /** @var string % Descuento fijo en ventas */
    public const DFIART = 'DFIART';

    public const RPUART = 'RPUART';

    public const RPFART = 'RPFART';

    public const RCUART = 'RCUART';

    public const RCFART = 'RCFART';

    public const REFART = 'REFART';

    public const MECART = 'MECART';

    public const DSCART = 'DSCART';

    public const EANART = 'EANART';

    public const AMAART = 'AMAART';

    public const CAEART = 'CAEART';

    public const UFSART = 'UFSART';

    /** @var string Fecha de la imagen */
    public const IMFART = 'IMFART';

    public const DELART = 'DELART';

    public const PFIART = 'PFIART';

    public const MPTART = 'MPTART';

    public const CP4ART = 'CP4ART';

    public const CP5ART = 'CP5ART';

    public const ORDART = 'ORDART';

    public const UEQART = 'UEQART';

    public const DCOART = 'DCOART';

    public const FAVART = 'FAVART';

    public const DSTART = 'DSTART';

    public const VEWART = 'VEWART';

    public const URAART = 'URAART';

    public const VMPART = 'VMPART';

    public const UR1ART = 'UR1ART';

    public const UR2ART = 'UR2ART';

    public const UR3ART = 'UR3ART';

    public const CN8ART = 'CN8ART';
}
