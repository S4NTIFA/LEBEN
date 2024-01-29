import java.sql.Date;

public class salida {
    private int idsalida;
    private int idProducto;
    private String tipoSalida;
    private Date fechaSalida;
    private int cantidadSalida;
    public int getIdsalida() {
        return idsalida;
    }
    public void setIdsalida(int idsalida) {
        this.idsalida = idsalida;
    }
    public int getIdProducto() {
        return idProducto;
    }
    public void setIdProducto(int idProducto) {
        this.idProducto = idProducto;
    }
    public String getTipoSalida() {
        return tipoSalida;
    }
    public void setTipoSalida(String tipoSalida) {
        this.tipoSalida = tipoSalida;
    }
    public Date getFechaSalida() {
        return fechaSalida;
    }
    public void setFechaSalida(Date fechaSalida) {
        this.fechaSalida = fechaSalida;
    }
    public int getCantidadSalida() {
        return cantidadSalida;
    }
    public void setCantidadSalida(int cantidadSalida) {
        this.cantidadSalida = cantidadSalida;
    }
}
