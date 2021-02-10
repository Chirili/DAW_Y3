import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
@Injectable({
  providedIn: 'root'
})
export class OwnerService {

  private url: string = "http://localhost:4300/";

  constructor(private http: HttpClient) { }

  getOwners(){
    return this.http.post(this.url,JSON.stringify({accion:"ListarOwners"}));
  }

  getOwnerDetails(id){
    return this.http.post(this.url,JSON.stringify({accion: "ObtenerOwnerId",id: id}));
  }
}
