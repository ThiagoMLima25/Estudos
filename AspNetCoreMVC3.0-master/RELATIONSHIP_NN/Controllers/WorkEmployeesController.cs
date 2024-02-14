using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.Rendering;
using Microsoft.EntityFrameworkCore;
using RELATIONSHIP_NN.Models;

namespace RELATIONSHIP_NN.Controllers
{
    public class WorkEmployeesController : Controller
    {
        private readonly Context _context;

        public WorkEmployeesController(Context context)
        {
            _context = context;
        }

        // GET: WorkEmployees
        public async Task<IActionResult> Index()
        {
            var context = _context.WorksEmployees.Include(w => w.Employee).Include(w => w.Work);
            return View(await context.ToListAsync());
        }

        // GET: WorkEmployees/Details/5
        public async Task<IActionResult> Details(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var workEmployee = await _context.WorksEmployees
                .Include(w => w.Employee)
                .Include(w => w.Work)
                .FirstOrDefaultAsync(m => m.EmployeeId == id);
            if (workEmployee == null)
            {
                return NotFound();
            }

            return View(workEmployee);
        }

        // GET: WorkEmployees/Create
        public IActionResult Create()
        {
            ViewData["EmployeeId"] = new SelectList(_context.Employees, "EmployeeId", "Name");
            ViewData["WorkId"] = new SelectList(_context.Works, "WorkId", "Name");
            return View();
        }

        // POST: WorkEmployees/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Create([Bind("EmployeeId,WorkId,Workload")] WorkEmployee workEmployee)
        {
            if (ModelState.IsValid)
            {
                _context.Add(workEmployee);
                await _context.SaveChangesAsync();
                return RedirectToAction(nameof(Index));
            }
            ViewData["EmployeeId"] = new SelectList(_context.Employees, "EmployeeId", "Name", workEmployee.EmployeeId);
            ViewData["WorkId"] = new SelectList(_context.Works, "WorkId", "Name", workEmployee.WorkId);
            return View(workEmployee);
        }

        // GET: WorkEmployees/Edit/5
        public async Task<IActionResult> Edit(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var workEmployee = await _context.WorksEmployees.FindAsync(id);
            if (workEmployee == null)
            {
                return NotFound();
            }
            ViewData["EmployeeId"] = new SelectList(_context.Employees, "EmployeeId", "Name", workEmployee.EmployeeId);
            ViewData["WorkId"] = new SelectList(_context.Works, "WorkId", "Name", workEmployee.WorkId);
            return View(workEmployee);
        }

        // POST: WorkEmployees/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Edit(int id, [Bind("EmployeeId,WorkId,Workload")] WorkEmployee workEmployee)
        {
            if (id != workEmployee.EmployeeId)
            {
                return NotFound();
            }

            if (ModelState.IsValid)
            {
                try
                {
                    _context.Update(workEmployee);
                    await _context.SaveChangesAsync();
                }
                catch (DbUpdateConcurrencyException)
                {
                    if (!WorkEmployeeExists(workEmployee.EmployeeId))
                    {
                        return NotFound();
                    }
                    else
                    {
                        throw;
                    }
                }
                return RedirectToAction(nameof(Index));
            }
            ViewData["EmployeeId"] = new SelectList(_context.Employees, "EmployeeId", "Name", workEmployee.EmployeeId);
            ViewData["WorkId"] = new SelectList(_context.Works, "WorkId", "Name", workEmployee.WorkId);
            return View(workEmployee);
        }

        // GET: WorkEmployees/Delete/5
        public async Task<IActionResult> Delete(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var workEmployee = await _context.WorksEmployees
                .Include(w => w.Employee)
                .Include(w => w.Work)
                .FirstOrDefaultAsync(m => m.EmployeeId == id);
            if (workEmployee == null)
            {
                return NotFound();
            }

            return View(workEmployee);
        }

        // POST: WorkEmployees/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> DeleteConfirmed(int id)
        {
            var workEmployee = await _context.WorksEmployees.FindAsync(id);
            _context.WorksEmployees.Remove(workEmployee);
            await _context.SaveChangesAsync();
            return RedirectToAction(nameof(Index));
        }

        private bool WorkEmployeeExists(int id)
        {
            return _context.WorksEmployees.Any(e => e.EmployeeId == id);
        }
    }
}
