import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import { api } from 'src/environments/environment';
import { PetType } from '../models/pet-type';
@Injectable({
  providedIn: 'root'
})
export class PetTypeService {
  readonly API = api;
  constructor(private http: HttpClient) { }

  getPetTypes(){
    return this.http.post<PetType[]>(this.API, JSON.stringify({
      accion: "ListarPettypes"
    }))
  }
  addPetType(petTypeObject: PetType){
    return this.http.post<PetType>(this.API,JSON.stringify({
      accion: "AnadePettype",
      pettype: petTypeObject
    }))
  }
  removePetType(id){
    return this.http.post<PetType[]>(this.API,JSON.stringify({
      accion: "BorraPettype",
      id: id
    }))
  }
}
