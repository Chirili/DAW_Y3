import { Component, OnInit } from '@angular/core';
import {Router,ActivatedRoute} from '@angular/router';
import { Owner } from 'src/app/models/owner';
import { OwnerService } from 'src/app/services/owner.service';
@Component({
  selector: 'app-owner-detail',
  templateUrl: './owner-detail.component.html',
  styleUrls: ['./owner-detail.component.scss']
})
export class OwnerDetailComponent implements OnInit {

  public owner: Owner;

  constructor(private activeroute: ActivatedRoute, private ownerService: OwnerService) { }

  ngOnInit(): void {
    this.ownerService.getOwnerDetails(this.activeroute.snapshot.paramMap.get("id")).subscribe(data =>{
      this.owner = <Owner> data;
    })
  }

}
