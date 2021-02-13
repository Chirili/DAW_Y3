import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Owner } from '../models/owner';
import { environment } from 'src/environments/environment';
@Injectable({
  providedIn: 'root'
})
export class OwnerService {

  private url: string = environment.API_URL;

  constructor(private http: HttpClient) { }

  getOwners(){
    return this.http.post(this.url,JSON.stringify({accion:"ListarOwners"}));
  }

  getOwnerDetails(id){
    return this.http.post<Owner>(this.url,JSON.stringify({accion: "ObtenerOwnerId",id: id}));
  }
  addOwner(owner: Owner){
    return this.http.post(this.url,JSON.stringify({accion:"AnadeOwner",owner: owner}));
  }
  modOwner(owner: Owner){
    console.log(owner);
    return this.http.post(this.url,JSON.stringify({
      accion:"ModificaOwner",
      owner: owner
    }));
  }
  deleteOwner(ownerId){
    return this.http.post(this.url,JSON.stringify({accion:"BorraOwner",id:ownerId}));
  }
  retrieveOwnerPets(id){
    return this.http.post<Object[]>(this.url,JSON.stringify({
      accion:"ListarPetsOwnerId",
      id: id,
    }));
  }
}
