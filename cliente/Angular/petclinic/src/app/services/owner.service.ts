import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Owner } from '../models/owner';
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
  addOwner(owner: Owner){
    return this.http.post(this.url,JSON.stringify({accion:"AnadeOwner",owner: owner}));
  }
  modOwner(id, owner: Owner){
    return this.http.post(this.url,JSON.stringify({accion:"ModificaOwner"}))
  }
  deleteOwner(ownerId){
    console.log(JSON.stringify({accion:"BorraOwner",id:ownerId}));
    return this.http.post(this.url,JSON.stringify({accion:"BorraOwner",id:ownerId}));
  }
}
