package org.apt.model;

import org.bson.codecs.pojo.annotations.BsonProperty;
import org.bson.types.ObjectId;

public class Student {

    private ObjectId id;
    @BsonProperty("roll")
    private String maSv;

    @BsonProperty("full_name")
    private String hoVaten;

    @BsonProperty("class_name")
    private String tenLop;

    public ObjectId getId() {
        return id;
    }

    public void setId(ObjectId id) {
        this.id = id;
    }

    public String getMaSv() {
        return maSv;
    }

    public void setMaSv(String maSv) {
        this.maSv = maSv;
    }

    public String getHoVaten() {
        return hoVaten;
    }

    public void setHoVaten(String hoVaten) {
        this.hoVaten = hoVaten;
    }

    public String getTenLop() {
        return tenLop;
    }

    public void setTenLop(String tenLop) {
        this.tenLop = tenLop;
    }

    public Student(String maSv, String hoVaten, String tenLop) {
        this.maSv = maSv;
        this.hoVaten = hoVaten;
        this.tenLop = tenLop;
    }

    public Student() {
    }

    @Override
    public String toString() {
        return "Student{" + "id=" + id + ", maSv=" + maSv + ", hoVaten=" + hoVaten + ", tenLop=" + tenLop + '}';
    }

    
}