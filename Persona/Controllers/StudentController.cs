using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using Persona.Models;

namespace Persona.Controllers
{
    public class StudentController : Controller
    {
        umtcitEntities db = new umtcitEntities();
        // GET: Student
        public ActionResult Students()
        {
            return View();
        }
        [HttpPost]
        public JsonResult getStudents()
        {
            var list = db.tbl_student.ToList();
            return Json(list, JsonRequestBehavior.AllowGet);
        }
        [HttpPost]
        public JsonResult saveStudent(tbl_student data)
        {
            db.tbl_student.Add(data);
            db.SaveChanges();
            return Json("", JsonRequestBehavior.AllowGet);
        }
        [HttpPost]
        public JsonResult updateStudent(tbl_student data)
        {
            db.Entry(data).State = EntityState.Modified;
            db.SaveChanges();
            return Json("", JsonRequestBehavior.AllowGet);
        }
    }
    
}