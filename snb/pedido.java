public class pedido {
    private int idpedido;
    private int idusuarios;
    private String fechaPedido;
    private String tipoPedido;
    private String estadopedido;
    private float valorPedido;
    private String emailUsuario;
    public int getIdpedido() {
        return idpedido;
    }
    public void setIdpedido(int idpedido) {
        this.idpedido = idpedido;
    }
    public int getIdusuarios() {
        return idusuarios;
    }
    public void setIdusuarios(int idusuarios) {
        this.idusuarios = idusuarios;
    }
    public String getFechaPedido() {
        return fechaPedido;
    }
    public void setFechaPedido(String fechaPedido) {
        this.fechaPedido = fechaPedido;
    }
    public String getTipoPedido() {
        return tipoPedido;
    }
    public void setTipoPedido(String tipoPedido) {
        this.tipoPedido = tipoPedido;
    }
    public String getEstadopedido() {
        return estadopedido;
    }
    public void setEstadopedido(String estadopedido) {
        this.estadopedido = estadopedido;
    }
    public float getValorPedido() {
        return valorPedido;
    }
    public void setValorPedido(float valorPedido) {
        this.valorPedido = valorPedido;
    }
    public String getEmailUsuario() {
        return emailUsuario;
    }
    public void setEmailUsuario(String emailUsuario) {
        this.emailUsuario = emailUsuario;
    }
}
