import { Injectable } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import { api } from 'src/environments/environment';
import { Specialty } from '../models/specialty';
@Injectable({
  providedIn: 'root'
})
export class SpecialtiesService {
  readonly API = api;
  constructor(private http: HttpClient) { }
  getSpecialties(){
    return this.http.post<Specialty[]>(this.API, JSON.stringify({
      accion: "ListarSpecialties"
    }))
  }
  removeSpecialty(id){
    return this.http.post(this.API,JSON.stringify({
      accion: "BorraSpecialty",
      id: id,
    }))
  }
  addSpecialty(specialty){
    return this.http.post<Specialty>(this.API,JSON.stringify({
      accion: "AnadeSpecialty",
      specialty: specialty,
    }))
  }
  modSpecialty(specialty: Specialty){
    return this.http.post<Specialty>(this.API, JSON.stringify({
      accion: "ModificaSpecialty",
      specialty: specialty
    }))
  }
}
