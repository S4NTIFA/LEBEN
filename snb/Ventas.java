import java.sql.Date;

public class Ventas {
    private int idVentas;
    private Date fechaVenta;
    private int precioVenta;
    public int getIdVentas() {
        return idVentas;
    }
    public void setIdVentas(int idVentas) {
        this.idVentas = idVentas;
    }
    public Date getFechaVenta() {
        return fechaVenta;
    }
    public void setFechaVenta(Date fechaVenta) {
        this.fechaVenta = fechaVenta;
    }
    public int getPrecioVenta() {
        return precioVenta;
    }
    public void setPrecioVenta(int precioVenta) {
        this.precioVenta = precioVenta;
    }


    
}
