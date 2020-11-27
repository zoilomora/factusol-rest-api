<?php
declare(strict_types=1);

namespace ZoiloMora\FactuSOL\Infrastructure\Persistence;

final class F_ART
{
    public const TABLE_NAME = 'F_ART';

    /** @var string Código */
    public const CODART = 'F_ART.CODART';

    /** @var string Equivalente */
    public const EQUART = 'F_ART.EQUART';

    /** @var string Código corto */
    public const CCOART = 'F_ART.CCOART';

    /** @var string Familia */
    public const FAMART = 'F_ART.FAMART';

    /** @var string Descripcion general */
    public const DESART = 'F_ART.DESART';

    /** @var string [E]Descripción para etiquetas */
    public const DEEART = 'F_ART.DEEART';

    /** @var string [E]Descripción para tickes */
    public const DETART = 'F_ART.DETART';

    /** @var string Proveedor habitual */
    public const PHAART = 'F_ART.PHAART';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Tipo de IVA */
    public const TIVART = 'F_ART.TIVART';

    /** @var string Precio de costo */
    public const PCOART = 'F_ART.PCOART';

    /** @var string Descuento 1 */
    public const DT0ART = 'F_ART.DT0ART';

    /** @var string Descuento 2 */
    public const DT1ART = 'F_ART.DT1ART';

    /** @var string Descuento 3 */
    public const DT2ART = 'F_ART.DT2ART';

    /** @var string Fecha de alta */
    public const FALART = 'F_ART.FALART';

    /** @var string Máximo descuento aplicable */
    public const MDAART = 'F_ART.MDAART';

    /** @var string Ubicación en el almacén */
    public const UBIART = 'F_ART.UBIART';

    /** @var string Unidades en línea */
    public const UELART = 'F_ART.UELART';

    /** @var string Unidades por palets */
    public const UPPART = 'F_ART.UPPART';

    /** @var string Dimensiones */
    public const DIMART = 'F_ART.DIMART';

    /** @var string Mensaje emergente */
    public const MEMART = 'F_ART.MEMART';

    /** @var string Observaciones */
    public const OBSART = 'F_ART.OBSART';

    /** @var string [E]No permitir utilzar el art. */
    public const NPUART = 'F_ART.NPUART';

    /** @var string [E]No imprimir en ningun listado */
    public const NIAART = 'F_ART.NIAART';

    /** @var string [E]Art. compuesto */
    public const COMART = 'F_ART.COMART';

    /** @var string Campo Programable 1 */
    public const CP1ART = 'F_ART.CP1ART';

    /** @var string Campo Programable 2 */
    public const CP2ART = 'F_ART.CP2ART';

    /** @var string Campo Programable 3 */
    public const CP3ART = 'F_ART.CP3ART';

    /** @var string Descripción larga */
    public const DLAART = 'F_ART.DLAART';

    /** @var string Importe de portes por unidad */
    public const IPUART = 'F_ART.IPUART';

    /** @var string Cuenta contable para ventas */
    public const NCCART = 'F_ART.NCCART';

    /** @var string Cuenta contable para compras */
    public const CUCART = 'F_ART.CUCART';

    /** @var string Cantidad por defecto en las salidas */
    public const CANART = 'F_ART.CANART';

    /** @var string [E]Imagen */
    public const IMGART = 'F_ART.IMGART';

    /** @var string [E]Subir a internet */
    public const SUWART = 'F_ART.SUWART';

    /** @var string [E]Descripción web */
    public const DEWART = 'F_ART.DEWART';

    /** @var string [E]Mensaje emergente web */
    public const MEWART = 'F_ART.MEWART';

    /** @var string [E]Controlar stock (web) */
    public const CSTART = 'F_ART.CSTART';

    /** @var string [E]Imagen web */
    public const IMWART = 'F_ART.IMWART';

    /** @var string [E]Control de stock */
    public const STOART = 'F_ART.STOART';

    /** @var string Fecha de última modificación */
    public const FUMART = 'F_ART.FUMART';

    /** @var string Peso */
    public const PESART = 'F_ART.PESART';

    /** @var string Fabricante */
    public const FTEART = 'F_ART.FTEART';

    /** @var string Artículo concatenado */
    public const ACOART = 'F_ART.ACOART';

    /** @var string Garantía */
    public const GARART = 'F_ART.GARART';

    /** @var string Unidad de medida */
    public const UMEART = 'F_ART.UMEART';

    /** @var string [L=#0;Sí#1;No]Traspasar el artículo a MovilSol */
    public const TMOART = 'F_ART.TMOART';

    /** @var string [E]Contraseña */
    public const CONART = 'F_ART.CONART';

    /** @var string [L=#0;IVA1AUT#1;IVA2AUT#2;IVA3AUT#3;Exento]Tipo de IVA 2º periodo */
    public const TIV2ART = 'F_ART.TIV2ART';

    /** @var string Primera descripción auxiliar */
    public const DE1ART = 'F_ART.DE1ART';

    /** @var string Segunda descripción auxiliar */
    public const DE2ART = 'F_ART.DE2ART';

    /** @var string Tercera descripción auxiliar */
    public const DE3ART = 'F_ART.DE3ART';

    /** @var string % Descuento fijo en ventas */
    public const DFIART = 'F_ART.DFIART';

    public const RPUART = 'F_ART.RPUART';

    public const RPFART = 'F_ART.RPFART';

    public const RCUART = 'F_ART.RCUART';

    public const RCFART = 'F_ART.RCFART';

    public const REFART = 'F_ART.REFART';

    public const MECART = 'F_ART.MECART';

    public const DSCART = 'F_ART.DSCART';

    public const EANART = 'F_ART.EANART';

    public const AMAART = 'F_ART.AMAART';

    public const CAEART = 'F_ART.CAEART';

    public const UFSART = 'F_ART.UFSART';

    /** @var string Fecha de la imagen */
    public const IMFART = 'F_ART.IMFART';

    public const DELART = 'F_ART.DELART';

    public const PFIART = 'F_ART.PFIART';

    public const MPTART = 'F_ART.MPTART';

    public const CP4ART = 'F_ART.CP4ART';

    public const CP5ART = 'F_ART.CP5ART';

    public const ORDART = 'F_ART.ORDART';

    public const UEQART = 'F_ART.UEQART';

    public const DCOART = 'F_ART.DCOART';

    public const FAVART = 'F_ART.FAVART';

    public const DSTART = 'F_ART.DSTART';

    public const VEWART = 'F_ART.VEWART';

    public const URAART = 'F_ART.URAART';

    public const VMPART = 'F_ART.VMPART';

    public const UR1ART = 'F_ART.UR1ART';

    public const UR2ART = 'F_ART.UR2ART';

    public const UR3ART = 'F_ART.UR3ART';

    public const CN8ART = 'F_ART.CN8ART';
}
