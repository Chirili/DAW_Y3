import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import { api } from 'src/environments/environment';
@Injectable({
  providedIn: 'root'
})
export class PetTypeService {
  readonly API = api;
  constructor(private http: HttpClient) { }

  getPetTypes(){
    return this.http.post<Object[]>(this.API, JSON.stringify({
      accion: "ListarPettypes"
    }))
  }
  addPetType(petTypeObject: Object){
    return this.http.post(this.API,JSON.stringify({
      accion: "AnadePettype",
      pettype: petTypeObject
    }))
  }
  removePetType(id){
    return this.http.post<Object[]>(this.API,JSON.stringify({
      accion: "BorraPettype",
      id: id
    }))
  }
}
