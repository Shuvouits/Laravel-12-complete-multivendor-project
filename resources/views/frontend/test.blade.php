<style>
    .roof-services-grid {
        --accent: #e8b21a;
        --border: #2d2d2d;
        --text: #111111;
        --muted: #6f6f6f;
        --card-bg: #f6f6f6;
        --radius: 10px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 0;
        overflow: hidden;
        border-radius: 12px;
    }

    .roof-card {
        position: relative;
        min-height: 295px;
        background: var(--card-bg);
        border: 1px solid var(--border);
        padding: 32px 34px 26px;
        overflow: hidden;
        transition: all 0.35s ease;
    }

    .roof-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            linear-gradient(rgba(232, 178, 26, 0.88), rgba(232, 178, 26, 0.88)),
            url('/wp-content/uploads/2020/11/roof_9.jpg') center center / cover no-repeat;
        opacity: 0;
        transition: opacity 0.35s ease;
        z-index: 0;
    }

    .roof-card>* {
        position: relative;
        z-index: 1;
    }

    .roof-card:hover::before {
        opacity: 1;
    }

    .roof-card h3 {
        margin: 0 0 14px;
        font-size: 22px;
        line-height: 1.2;
        font-weight: 700;
        color: var(--text);
        transition: color 0.35s ease;
    }

    .roof-card .line {
        width: 28px;
        height: 4px;
        background: var(--accent);
        margin-bottom: 20px;
        transition: background 0.35s ease;
    }

    .roof-card p {
        margin: 0;
        max-width: 250px;
        font-size: 16px;
        line-height: 1.65;
        color: var(--muted);
        transition: color 0.35s ease;
    }

    .roof-card .bottom {
        position: absolute;
        left: 34px;
        right: 34px;
        bottom: 22px;
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
    }

    .roof-card .icon {
        width: 42px;
        height: 42px;
        color: #b8b8b8;
        transition: color 0.35s ease, opacity 0.35s ease;
    }

    .roof-card .number {
        font-size: 22px;
        line-height: 1;
        font-weight: 300;
        color: #b8b8b8;
        transition: color 0.35s ease;
    }

    .roof-card:hover h3,
    .roof-card:hover p,
    .roof-card:hover .icon,
    .roof-card:hover .number {
        color: #ffffff;
    }

    .roof-card:hover .line {
        background: #ffffff;
    }

    .roof-card a.card-link {
        position: absolute;
        inset: 0;
        z-index: 2;
        text-indent: -9999px;
    }

    @media (max-width: 1024px) {
        .roof-services-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 767px) {
        .roof-services-grid {
            grid-template-columns: 1fr;
        }

        .roof-card {
            min-height: 260px;
            padding: 26px 24px 20px;
        }

        .roof-card .bottom {
            left: 24px;
            right: 24px;
        }

        .roof-card h3 {
            font-size: 20px;
        }
    }
</style>

<div class="roof-services-grid">

    <div class="roof-card">
        <h3>Brown Deer</h3>
        <div class="line"></div>
        <p>Roofing services for Brown Deer homes, including repairs, replacements, inspections, and storm damage
            support.</p>

        <div class="bottom">
            <svg class="icon" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2.2">
                <path d="M8 18l12-8 12 8 12-8 12 8v28l-12 8-12-8-12 8-12-8V18z" />
                <path d="M20 10v36M32 18v36M44 10v36" />
            </svg>
            <div class="number">01</div>
        </div>
        <a class="card-link" href="/roofing-brown-deer-wi/">Brown Deer</a>
    </div>

    <div class="roof-card">
        <h3>Roof Repair</h3>
        <div class="line"></div>
        <p>Targeted roof repairs for leaks, damaged shingles, flashing issues, and worn areas.</p>

        <div class="bottom">
            <svg class="icon" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2.2">
                <path d="M10 50h44M12 20l10-6 10 6 10-6 10 6" />
                <path d="M12 20v30M22 14v36M32 20v30M42 14v36M52 20v30" />
            </svg>
            <div class="number">02</div>
        </div>
        <a class="card-link" href="/roof-repair-milwaukee-wi/">Roof Repair</a>
    </div>

    <div class="roof-card">
        <h3>Menomonee Falls</h3>
        <div class="line"></div>
        <p>Roof repair and replacement solutions for Menomonee Falls properties, from aging roofs to weather-related
            damage.</p>

        <div class="bottom">
            <svg class="icon" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2.2">
                <path d="M8 38l8-18 8 18 8-18 8 18 8-18 8 18" />
                <path d="M8 38h48M12 46h40" />
            </svg>
            <div class="number">03</div>
        </div>
        <a class="card-link" href="/roofing-menomonee-falls-wi/">Menomonee Falls</a>
    </div>

    <div class="roof-card">
        <h3>North Side Milwaukee</h3>
        <div class="line"></div>
        <p>Local roofing support for North Side Milwaukee homeowners who need clear inspections, repairs, or full roof
            replacement.</p>

        <div class="bottom">
            <svg class="icon" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2.2">
                <path d="M10 50V24l22-14 22 14v26H10z" />
                <path d="M22 50V32h20v18M18 28l14-9 14 9" />
            </svg>
            <div class="number">04</div>
        </div>
        <a class="card-link" href="/roofing-north-milwaukee-wi/">North Side Milwaukee</a>
    </div>

    <div class="roof-card">
        <h3>River West</h3>
        <div class="line"></div>
        <p>Roofing services for River West homes and buildings, including leak repairs, maintenance, and replacement
            planning.</p>

        <div class="bottom">
            <svg class="icon" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2.2">
                <path d="M10 44l12-18h20l12 18H10z" />
                <path d="M18 44l8-12h12l8 12" />
            </svg>
            <div class="number">05</div>
        </div>
        <a class="card-link" href="/roofing-riverwest-wi/">River West</a>
    </div>

    <div class="roof-card">
        <h3>Glendale</h3>
        <div class="line"></div>
        <p>Dependable roofing help for Glendale property owners dealing with worn shingles, leaks, or storm damage.</p>

        <div class="bottom">
            <svg class="icon" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2.2">
                <path d="M10 44l12-18h20l12 18H10z" />
                <path d="M18 44l8-12h12l8 12" />
            </svg>
            <div class="number">06</div>
        </div>
        <a class="card-link" href="/roofing-glendale-wi/">Glendale</a>
    </div>

     <div class="roof-card">
        <h3>Butler</h3>
        <div class="line"></div>
        <p>Roofing solutions for Butler homes, with practical repair, inspection, and replacement options.</p>

        <div class="bottom">
            <svg class="icon" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2.2">
                <path d="M10 44l12-18h20l12 18H10z" />
                <path d="M18 44l8-12h12l8 12" />
            </svg>
            <div class="number">07</div>
        </div>
        <a class="card-link" href="/roofing-butler-wi/">Butler</a>
    </div>


     <div class="roof-card">
        <h3>Shorewood</h3>
        <div class="line"></div>
        <p>Roofing services for Shorewood homes, including careful inspections, repair work, and long-term roof protection.</p>

        <div class="bottom">
            <svg class="icon" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2.2">
                <path d="M10 44l12-18h20l12 18H10z" />
                <path d="M18 44l8-12h12l8 12" />
            </svg>
            <div class="number">08</div>
        </div>
        <a class="card-link" href="/roofing-shorewood-wi/">Shorewood</a>
    </div>





</div>
