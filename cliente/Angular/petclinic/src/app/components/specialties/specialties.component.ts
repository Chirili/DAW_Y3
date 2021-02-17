import { Component, OnInit } from '@angular/core';
import { Specialty } from 'src/app/models/specialty';
import { SpecialtiesService } from 'src/app/services/specialties.service';
import {NgModel, FormGroup, FormArray, FormBuilder, Validators} from '@angular/forms';
@Component({
  selector: 'app-specialties',
  templateUrl: './specialties.component.html',
  styleUrls: ['./specialties.component.scss']
})
export class SpecialtiesComponent implements OnInit {
  isEditing: boolean;
  specialtySelected: Specialty;
  specialties: Specialty[];
  public form: FormGroup = this.formBuilder.group({
    specialtiesForm: this.formBuilder.array([])
  })
  constructor(private specialtiesService: SpecialtiesService, private formBuilder: FormBuilder) { 

  }
  get getSpecialtiesForm(){
    return this.form.get('specialtiesForm') as FormArray;
  }
  addNewSpecialty(){
    this.getSpecialtiesForm.push(this.formBuilder.control('',[Validators.required,Validators.minLength(5)]));
  }
  saveSpecialty(i){
    this.specialtiesService.addSpecialty({name: this.getSpecialtiesForm.value[i]}).subscribe(data => {
      this.specialties = [...this.specialties, data];
    })
    this.deleteSpecialty(i);
    this.isEditing = !this.isEditing;
  }

  deleteSpecialty(i){
    this.getSpecialtiesForm.removeAt(i);
  }
  saveEditedSpecialty(name){
    this.specialtySelected.name = name;
    console.log(this.specialtySelected);
    this.specialtiesService.modSpecialty(this.specialtySelected).subscribe(data => {
      console.log(data);
      this.isEditing = true;
    })
  }
  ngOnInit(): void {
   
    this.isEditing = true;
    this.specialtySelected = {
      id: 0,
      name: ""
    }
    this.specialtiesService.getSpecialties().subscribe(data => {
      this.specialties = data;
    })
  }
  enterEditMode(specialty: Specialty){
    this.isEditing = false;
    this.specialtySelected = specialty;
  }
  removeSpecialty(id){
    if(confirm(`¿Estás seguro que deseas borrar a ${id}?`)){
      this.specialtiesService.removeSpecialty(id).subscribe(data => {
        console.log(data);
        this.specialties.splice(this.specialties.findIndex(specialty => specialty.id == id),1);
      });
    }
  }
}
