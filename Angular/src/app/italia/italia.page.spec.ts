import { ComponentFixture, TestBed } from '@angular/core/testing';
import { ItaliaPage } from './italia.page';

describe('ItaliaPage', () => {
  let component: ItaliaPage;
  let fixture: ComponentFixture<ItaliaPage>;

  beforeEach(async(() => {
    fixture = TestBed.createComponent(ItaliaPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
