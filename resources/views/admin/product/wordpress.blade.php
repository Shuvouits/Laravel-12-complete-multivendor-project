<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

.xpert-process-section,
.xpert-process-section *{
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.xpert-process-section{
    --xpert-brand: #022012;
    --xpert-brand-dark: #01150c;
    --xpert-green: #00ffa3;
    --xpert-soft-green: #7affca;

    position: relative;
    overflow: hidden;
    isolation: isolate;
    background:
        radial-gradient(circle at 12% 8%, rgba(0,255,163,.13), transparent 32%),
        radial-gradient(circle at 86% 100%, rgba(0,255,163,.08), transparent 34%),
        linear-gradient(135deg, var(--xpert-brand) 0%, #021a0f 48%, var(--xpert-brand-dark) 100%);
    border: 1px solid rgba(255,255,255,.07);
    border-radius: 34px;
    padding: clamp(64px, 7vw, 96px) clamp(22px, 4vw, 54px);
}

.xpert-process-section::before{
    content:"";
    position:absolute;
    inset:0;
    background:
        linear-gradient(rgba(255,255,255,.024) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,255,255,.024) 1px, transparent 1px);
    background-size: 54px 54px;
    mask-image: linear-gradient(to bottom, rgba(0,0,0,.32), transparent 72%);
    pointer-events:none;
    z-index:-1;
}

.xpert-process-container{
    width: 100%;
    max-width: 1280px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

.xpert-process-top{
    text-align: center;
    max-width: 900px;
    margin: 0 auto clamp(42px, 5vw, 64px);
}

.xpert-process-subtitle{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 10px 20px;
    border-radius: 999px;
    background: rgba(255,255,255,.055);
    border: 1px solid rgba(255,255,255,.10);
    color: var(--xpert-soft-green);
    font-size: 12px;
    line-height: 1;
    font-weight: 700;
    letter-spacing: 2.4px;
    text-transform: uppercase;
    margin-bottom: 24px;
    box-shadow: inset 0 1px 0 rgba(255,255,255,.07);
}

.xpert-process-subtitle::before{
    content:"";
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: var(--xpert-green);
    box-shadow: 0 0 18px rgba(0,255,163,.85);
}

.xpert-process-title{
    color: #ffffff;
    font-size: clamp(36px, 4vw, 54px);
    line-height: 1.18;
    font-weight: 600;
    letter-spacing: 0.6px;
    word-spacing: 3px;
    margin: 0;
}

.xpert-process-title span{
    color: var(--xpert-green);
    font-weight: 600;
    letter-spacing: 0.8px;
}

.xpert-process-grid{
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 22px;
    align-items: stretch;
}

.xpert-process-card{
    position: relative;
    min-height: 330px;
    padding: 32px 28px 34px;
    border-radius: 26px;
    background:
        linear-gradient(180deg, rgba(255,255,255,.075), rgba(255,255,255,.028));
    border: 1px solid rgba(255,255,255,.085);
    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.07),
        0 24px 60px rgba(0,0,0,.20);
    transition: transform .32s ease, border-color .32s ease, background .32s ease, box-shadow .32s ease;
}

.xpert-process-card::before{
    content:"";
    position:absolute;
    left: 24px;
    right: 24px;
    top: 0;
    height: 3px;
    border-radius: 0 0 999px 999px;
    background: linear-gradient(90deg, transparent, rgba(0,255,163,.85), transparent);
    opacity: .7;
}

.xpert-process-card:hover{
    transform: translateY(-8px);
    border-color: rgba(0,255,163,.30);
    background:
        linear-gradient(180deg, rgba(255,255,255,.095), rgba(255,255,255,.035));
    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.09),
        0 28px 70px rgba(0,0,0,.30),
        0 0 40px rgba(0,255,163,.055);
}

.xpert-step-number{
    width: 58px;
    height: 58px;
    border-radius: 17px;
    background: linear-gradient(135deg, var(--xpert-green) 0%, #09d985 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--xpert-brand);
    font-size: 18px;
    font-weight: 800;
    letter-spacing: -.3px;
    margin-bottom: 28px;
    box-shadow:
        0 14px 30px rgba(0,255,163,.18),
        inset 0 1px 0 rgba(255,255,255,.35);
}

.xpert-process-card h3{
    color: #ffffff;
    font-size: 20px;
    line-height: 1.3;
    margin: 0 0 14px;
    font-weight: 700;
    letter-spacing: -.2px;
}

.xpert-process-card p{
    color: rgba(255,255,255,.72);
    font-size: 15.5px;
    line-height: 1.82;
    font-weight: 400;
    margin: 0;
}

.xpert-arrow{
    position: absolute;
    top: 50%;
    right: -25px;
    transform: translateY(-50%);
    width: 48px;
    height: 48px;
    border-radius: 999px;
    background: var(--xpert-green);
    border: 6px solid var(--xpert-brand);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 20;
    box-shadow: 0 16px 32px rgba(0,0,0,.24);
}

.xpert-arrow svg{
    width: 18px;
    height: 18px;
    stroke: var(--xpert-brand);
    stroke-width: 3;
    fill: none;
    stroke-linecap: round;
    stroke-linejoin: round;
}

.xpert-process-card:last-child .xpert-arrow{
    display: none;
}

@media(max-width: 1100px){
    .xpert-process-grid{
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .xpert-process-card{
        min-height: 290px;
    }

    .xpert-arrow{
        display: none;
    }
}

@media(max-width: 767px){
    .xpert-process-section{
        border-radius: 24px;
        padding: 56px 18px;
    }

    .xpert-process-top{
        margin-bottom: 34px;
    }

    .xpert-process-title{
        font-size: 33px;
        letter-spacing: 0.3px;
        line-height: 1.22;
        word-spacing: 2px;
    }

    .xpert-process-subtitle{
        font-size: 11px;
        padding: 10px 17px;
        margin-bottom: 20px;
    }

    .xpert-process-grid{
        grid-template-columns: 1fr;
        gap: 18px;
    }

    .xpert-process-card{
        min-height: auto;
        padding: 28px 24px 30px;
        border-radius: 22px;
    }

    .xpert-step-number{
        width: 54px;
        height: 54px;
        margin-bottom: 24px;
    }

    .xpert-process-card h3{
        font-size: 20px;
    }

    .xpert-process-card p{
        font-size: 15px;
        line-height: 1.75;
    }
}




/* Green color correction: #9dd25f */
.xpert-process-section{
    --xpert-green: #9dd25f !important;
    --xpert-soft-green: #9dd25f !important;
}

/* Our Process pill text + dot */
.xpert-process-subtitle{
    color: #9dd25f !important;
}

.xpert-process-subtitle::before{
    background: #9dd25f !important;
    box-shadow: 0 0 18px rgba(157,210,95,.55) !important;
}

/* Heading green text */
.xpert-process-title span{
    color: #9dd25f !important;
}

/* Step number boxes */
.xpert-step-number{
    background: linear-gradient(135deg, #9dd25f 0%, #84b94d 100%) !important;
    color: #022012 !important;
    box-shadow:
        0 14px 30px rgba(157,210,95,.18),
        inset 0 1px 0 rgba(255,255,255,.35) !important;
}

/* Card top green glow line */
.xpert-process-card::before{
    background: linear-gradient(90deg, transparent, rgba(157,210,95,.9), transparent) !important;
}

/* Arrow circles */
.xpert-arrow{
    background: #9dd25f !important;
}

.xpert-arrow svg{
    stroke: #022012 !important;
}

/* Hover border color */
.xpert-process-card:hover{
    border-color: rgba(157,210,95,.35) !important;
    box-shadow:
        inset 0 1px 0 rgba(255,255,255,.09),
        0 28px 70px rgba(0,0,0,.30),
        0 0 40px rgba(157,210,95,.08) !important;
}


/* Section background color fix */
.xpert-process-section{
    background: #004225 !important;
}

</style>

<section class="xpert-process-section">

    <div class="xpert-process-container">

        <div class="xpert-process-top">

            <div class="xpert-process-subtitle">
                Our Process
            </div>

            <h2 class="xpert-process-title">
           From Strategy To Scalable Growth

               
            </h2>
            <p style="color: white; text-align: center;">
           A structured growth framework designed to improve visibility, authority, and business performance over time.

            </p>

        </div>

        <div class="xpert-process-grid">

            <div class="xpert-process-card">
                <div class="xpert-step-number">01</div>

                <h3>Discovery & Direction</h3>

                <p>
                   Audit technical SEO, visibility gaps, conversion issues, and structural weaknesses impacting growth.


                </p>

                <div class="xpert-arrow">
                    <svg viewBox="0 0 24 24">
                        <path d="M9 6l6 6-6 6"></path>
                    </svg>
                </div>
            </div>

            <div class="xpert-process-card">
                <div class="xpert-step-number">02</div>

                <h3>System Design</h3>

                <p>
                   Build visibility roadmap, content structure, search intent strategy, and technical SEO improvements aligned with business goals.

                </p>

                <div class="xpert-arrow">
                    <svg viewBox="0 0 24 24">
                        <path d="M9 6l6 6-6 6"></path>
                    </svg>
                </div>
            </div>

            <div class="xpert-process-card">
                <div class="xpert-step-number">03</div>

                <h3>Build & Launch</h3>

                <p>
                   Implement technical fixes, search optimization, content systems, internal linking, and conversion improvements.
                </p>

                <div class="xpert-arrow">
                    <svg viewBox="0 0 24 24">
                        <path d="M9 6l6 6-6 6"></path>
                    </svg>
                </div>
            </div>

            <div class="xpert-process-card">
                <div class="xpert-step-number">04</div>

                <h3>Optimize & Expand</h3>

                <p>
                   Continuously improve discoverability, engagement metrics, search visibility, and conversion performance.

                </p>
            </div>

        </div>

    </div>

</section>