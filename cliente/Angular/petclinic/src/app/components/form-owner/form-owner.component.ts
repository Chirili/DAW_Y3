import { Component, OnInit } from '@angular/core';
import {Router, ActivatedRoute} from '@angular/router';
import {FormControl, FormGroup} from '@angular/forms';
import { Owner } from '../../models/owner';
import { OwnerService } from '../../services/owner.service';

@Component({
  selector: 'app-form-owner',
  templateUrl: './form-owner.component.html',
  styleUrls: ['./form-owner.component.scss']
})
export class FormOwnerComponent implements OnInit {
  public owner: Owner;
  constructor(private params: ActivatedRoute, private route: Router, private ownerService: OwnerService) {
      
   }
  onSubmit(formValues: Owner){
    if(this.owner.id > 0){
      this.ownerService.modOwner(this.owner).subscribe(data => {
        this.route.navigate(['/owners']);
      }, error => console.log(error));
    }else{
      this.ownerService.addOwner(formValues).subscribe(data=>{
        console.log(data);
        this.route.navigate(['/owners']);
      }, error => console.log(error));
    }
  }
  ngOnInit(): void {
    let ownerId = Number.parseInt(this.params.snapshot.paramMap.get("id"));
    if(ownerId != -1) {
      this.ownerService.getOwnerDetails(ownerId).subscribe(data => {
        this.owner = data;
      })
    }else{
      this.owner = <Owner>{
        pets: [],
      };  
    }
  }

}
