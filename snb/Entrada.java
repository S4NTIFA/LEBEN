import java.sql.Date;

abstract class Entrada {
    private int  idEntrada;
    private int cantidadEntrada;
    private Date fechaEntrada;
    private int idProducto;
    public int getIdEntrada() {
        return idEntrada;
    }
    public void setIdEntrada(int idEntrada) {
        this.idEntrada = idEntrada;
    }
    public int getCantidadEntrada() {
        return cantidadEntrada;
    }
    public void setCantidadEntrada(int cantidadEntrada) {
        this.cantidadEntrada = cantidadEntrada;
    }
    public Date getFechaEntrada() {
        return fechaEntrada;
    }
    public void setFechaEntrada(Date fechaEntrada) {
        this.fechaEntrada = fechaEntrada;
    }
    public int getIdProducto() {
        return idProducto;
    }
    public void setIdProducto(int idProducto) {
        this.idProducto = idProducto;
    }

}