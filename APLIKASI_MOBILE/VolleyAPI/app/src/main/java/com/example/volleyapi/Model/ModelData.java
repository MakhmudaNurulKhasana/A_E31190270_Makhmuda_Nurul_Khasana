package com.example.volleyapi.Model;

public class ModelData {String username,nama,password,grup;
    public ModelData(){}

    public ModelData(String username, String nama, String password, String grup) {
        this.username = username;
        this.nama = nama;
        this.password = password;
        this.grup = grup;
    }

    public String getUsername() {
        return username;
    }
    public void setUsername(String username) {
        this.username = username;
    }

    public String getNama() {
        return nama;
    }
    public void setNama(String nama) {
        this.nama = nama;
    }

    public String getPassword() {
        return password;
    }
    public void setPassword(String password) {
        this.password = password;
    }

    public String getGrup() {
        return grup;
    }
    public void setGrup(String grup) {
        this.grup = grup;
    }
}