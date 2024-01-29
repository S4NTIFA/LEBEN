public class producto {
    private int idProducto; 
    private int idProveedor; 
    private int idCategoria;
    private int idTalla;
    private String nombreProducto;
    private float valorProducto;
    private int cantidadProducto;
    public int getIdProducto() {
        return idProducto;
    }
    public void setIdProducto(int idProducto) {
        this.idProducto = idProducto;
    }
    public int getIdProveedor() {
        return idProveedor;
    }
    public void setIdProveedor(int idProveedor) {
        this.idProveedor = idProveedor;
    }
    public int getIdCategoria() {
        return idCategoria;
    }
    public void setIdCategoria(int idCategoria) {
        this.idCategoria = idCategoria;
    }
    public int getIdTalla() {
        return idTalla;
    }
    public void setIdTalla(int idTalla) {
        this.idTalla = idTalla;
    }
    public String getNombreProducto() {
        return nombreProducto;
    }
    public void setNombreProducto(String nombreProducto) {
        this.nombreProducto = nombreProducto;
    }
    public float getValorProducto() {
        return valorProducto;
    }
    public void setValorProducto(float valorProducto) {
        this.valorProducto = valorProducto;
    }
    public int getCantidadProducto() {
        return cantidadProducto;
    }
    public void setCantidadProducto(int cantidadProducto) {
        this.cantidadProducto = cantidadProducto;
    }
}
