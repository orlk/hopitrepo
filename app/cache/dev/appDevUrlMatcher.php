<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // users_users_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'users_users_homepage');
            }

            return array (  '_controller' => 'Users\\UsersBundle\\Controller\\AcceuilController::indexAction',  '_route' => 'users_users_homepage',);
        }

        // users_users_Acceuil
        if ($pathinfo === '/Acceuil') {
            return array (  '_controller' => 'Users\\UsersBundle\\Controller\\AcceuilController::indexAction',  '_route' => 'users_users_Acceuil',);
        }

        if (0 === strpos($pathinfo, '/r')) {
            if (0 === strpos($pathinfo, '/rendezvous')) {
                // rendezvous
                if (rtrim($pathinfo, '/') === '/rendezvous') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'rendezvous');
                    }

                    return array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\RendezvousController::indexAction',  '_route' => 'rendezvous',);
                }

                // rendezvous_show
                if (preg_match('#^/rendezvous/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rendezvous_show')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\RendezvousController::showAction',));
                }

                // rendezvous_new
                if ($pathinfo === '/rendezvous/new') {
                    return array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\RendezvousController::newAction',  '_route' => 'rendezvous_new',);
                }

                // rendezvous_create
                if ($pathinfo === '/rendezvous/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_rendezvous_create;
                    }

                    return array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\RendezvousController::createAction',  '_route' => 'rendezvous_create',);
                }
                not_rendezvous_create:

                // rendezvous_edit
                if (preg_match('#^/rendezvous/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rendezvous_edit')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\RendezvousController::editAction',));
                }

                // rendezvous_update
                if (preg_match('#^/rendezvous/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_rendezvous_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rendezvous_update')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\RendezvousController::updateAction',));
                }
                not_rendezvous_update:

                // rendezvous_delete
                if (preg_match('#^/rendezvous/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_rendezvous_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rendezvous_delete')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\RendezvousController::deleteAction',));
                }
                not_rendezvous_delete:

                // rendezvous_accepte
                if (preg_match('#^/rendezvous/(?P<code>[^/]++)/accept$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rendezvous_accepte')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\RendezvousController::accepterrdvAction',));
                }

                // rendezvous_refuse
                if (preg_match('#^/rendezvous/(?P<code>[^/]++)/refuse$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rendezvous_refuse')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\RendezvousController::refuserrdvAction',));
                }

            }

            if (0 === strpos($pathinfo, '/rdvdisponible')) {
                // rdvdisponible
                if (rtrim($pathinfo, '/') === '/rdvdisponible') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'rdvdisponible');
                    }

                    return array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\RdvdisponibleController::indexAction',  '_route' => 'rdvdisponible',);
                }

                // rdvdisponible_show
                if (preg_match('#^/rdvdisponible/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rdvdisponible_show')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\RdvdisponibleController::showAction',));
                }

                // rdvdisponible_new
                if ($pathinfo === '/rdvdisponible/new') {
                    return array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\RdvdisponibleController::addAction',  '_route' => 'rdvdisponible_new',);
                }

                // rdvdisponible_create
                if ($pathinfo === '/rdvdisponible/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_rdvdisponible_create;
                    }

                    return array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\RdvdisponibleController::createAction',  '_route' => 'rdvdisponible_create',);
                }
                not_rdvdisponible_create:

                // rdvdisponible_edit
                if (preg_match('#^/rdvdisponible/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rdvdisponible_edit')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\RdvdisponibleController::updateAction',));
                }

                // rdvdisponible_update
                if (preg_match('#^/rdvdisponible/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_rdvdisponible_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rdvdisponible_update')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\RdvdisponibleController::updateAction',));
                }
                not_rdvdisponible_update:

                // rdvdisponible_delete
                if (preg_match('#^/rdvdisponible/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_rdvdisponible_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rdvdisponible_delete')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\RdvdisponibleController::deleteAction',));
                }
                not_rdvdisponible_delete:

            }

        }

        if (0 === strpos($pathinfo, '/fichepatient')) {
            // fichepatient
            if (rtrim($pathinfo, '/') === '/fichepatient') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fichepatient');
                }

                return array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\FichepatientController::indexAction',  '_route' => 'fichepatient',);
            }

            // fichepatient_show
            if (preg_match('#^/fichepatient/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fichepatient_show')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\FichepatientController::showAction',));
            }

            // fichepatient_new
            if ($pathinfo === '/fichepatient/new') {
                return array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\FichepatientController::addAction',  '_route' => 'fichepatient_new',);
            }

            // fichepatient_create
            if ($pathinfo === '/fichepatient/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fichepatient_create;
                }

                return array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\FichepatientController::createAction',  '_route' => 'fichepatient_create',);
            }
            not_fichepatient_create:

            // fichepatient_edit
            if (preg_match('#^/fichepatient/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fichepatient_edit')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\FichepatientController::updateAction',));
            }

            // fichepatient_update
            if (preg_match('#^/fichepatient/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_fichepatient_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fichepatient_update')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\FichepatientController::updateAction',));
            }
            not_fichepatient_update:

            // fichepatient_delete
            if (preg_match('#^/fichepatient/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_fichepatient_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fichepatient_delete')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\FichepatientController::deleteAction',));
            }
            not_fichepatient_delete:

            // fichepatient_recherche
            if (preg_match('#^/fichepatient/(?P<codeDm>[^/]++)/recherche$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fichepatient_recherche')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\FichepatientController::rechercheficheAction',));
            }

        }

        // homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/patient')) {
            // patient
            if (rtrim($pathinfo, '/') === '/patient') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'patient');
                }

                return array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\PatientController::indexAction',  '_route' => 'patient',);
            }

            // patient_show
            if (preg_match('#^/patient/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_show')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\PatientController::showAction',));
            }

            // patient_new
            if ($pathinfo === '/patient/new') {
                return array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\PatientController::newAction',  '_route' => 'patient_new',);
            }

            // patient_create
            if ($pathinfo === '/patient/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_patient_create;
                }

                return array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\PatientController::createAction',  '_route' => 'patient_create',);
            }
            not_patient_create:

            // patient_edit
            if (preg_match('#^/patient/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_edit')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\PatientController::editAction',));
            }

            // patient_update
            if (preg_match('#^/patient/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_patient_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_update')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\PatientController::updateAction',));
            }
            not_patient_update:

            // patient_delete
            if (preg_match('#^/patient/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_patient_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_delete')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\PatientController::deleteAction',));
            }
            not_patient_delete:

            // patient_mail
            if ($pathinfo === '/patient/redirection') {
                return array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\PatientController::redirectionAction',  '_route' => 'patient_mail',);
            }

            // patient_mailsend
            if ($pathinfo === '/patient/sendMail') {
                return array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\PatientController::sendmailAction',  '_route' => 'patient_mailsend',);
            }

        }

        if (0 === strpos($pathinfo, '/dossiermedical')) {
            // dossiermedical
            if (rtrim($pathinfo, '/') === '/dossiermedical') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dossiermedical');
                }

                return array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\DossiermedicalController::finddmAction',  '_route' => 'dossiermedical',);
            }

            // dossiermedical_show
            if (preg_match('#^/dossiermedical/(?P<codeDm>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dossiermedical_show')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\DossiermedicalController::showAction',));
            }

            // dossiermedical_new
            if ($pathinfo === '/dossiermedical/new') {
                return array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\DossiermedicalController::addAction',  '_route' => 'dossiermedical_new',);
            }

            // dossiermedical_create
            if ($pathinfo === '/dossiermedical/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_dossiermedical_create;
                }

                return array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\DossiermedicalController::createAction',  '_route' => 'dossiermedical_create',);
            }
            not_dossiermedical_create:

            // dossiermedical_edit
            if (preg_match('#^/dossiermedical/(?P<codeDm>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dossiermedical_edit')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\DossiermedicalController::updateAction',));
            }

            // dossiermedical_update
            if (preg_match('#^/dossiermedical/(?P<codeDm>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_dossiermedical_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dossiermedical_update')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\DossiermedicalController::updateAction',));
            }
            not_dossiermedical_update:

            // dossiermedical_delete
            if (preg_match('#^/dossiermedical/(?P<codeDm>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_dossiermedical_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dossiermedical_delete')), array (  '_controller' => 'hopital\\MedecinIBundle\\Controller\\DossiermedicalController::deleteAction',));
            }
            not_dossiermedical_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/users/users')) {
                if (0 === strpos($pathinfo, '/admin/users/users/users')) {
                    // admin_users_users_users_list
                    if ($pathinfo === '/admin/users/users/users/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_users_users_users_list',  '_route' => 'admin_users_users_users_list',);
                    }

                    // admin_users_users_users_create
                    if ($pathinfo === '/admin/users/users/users/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_users_users_users_create',  '_route' => 'admin_users_users_users_create',);
                    }

                    // admin_users_users_users_batch
                    if ($pathinfo === '/admin/users/users/users/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_users_users_users_batch',  '_route' => 'admin_users_users_users_batch',);
                    }

                    // admin_users_users_users_edit
                    if (preg_match('#^/admin/users/users/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_users_users_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_users_users_users_edit',));
                    }

                    // admin_users_users_users_delete
                    if (preg_match('#^/admin/users/users/users/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_users_users_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_users_users_users_delete',));
                    }

                    // admin_users_users_users_show
                    if (preg_match('#^/admin/users/users/users/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_users_users_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_users_users_users_show',));
                    }

                    // admin_users_users_users_export
                    if ($pathinfo === '/admin/users/users/users/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_users_users_users_export',  '_route' => 'admin_users_users_users_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/users/users/patient')) {
                    // admin_users_users_patient_list
                    if ($pathinfo === '/admin/users/users/patient/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.patient',  '_sonata_name' => 'admin_users_users_patient_list',  '_route' => 'admin_users_users_patient_list',);
                    }

                    // admin_users_users_patient_create
                    if ($pathinfo === '/admin/users/users/patient/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.patient',  '_sonata_name' => 'admin_users_users_patient_create',  '_route' => 'admin_users_users_patient_create',);
                    }

                    // admin_users_users_patient_batch
                    if ($pathinfo === '/admin/users/users/patient/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.patient',  '_sonata_name' => 'admin_users_users_patient_batch',  '_route' => 'admin_users_users_patient_batch',);
                    }

                    // admin_users_users_patient_edit
                    if (preg_match('#^/admin/users/users/patient/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_users_patient_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.patient',  '_sonata_name' => 'admin_users_users_patient_edit',));
                    }

                    // admin_users_users_patient_delete
                    if (preg_match('#^/admin/users/users/patient/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_users_patient_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.patient',  '_sonata_name' => 'admin_users_users_patient_delete',));
                    }

                    // admin_users_users_patient_show
                    if (preg_match('#^/admin/users/users/patient/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_users_patient_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.patient',  '_sonata_name' => 'admin_users_users_patient_show',));
                    }

                    // admin_users_users_patient_export
                    if ($pathinfo === '/admin/users/users/patient/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.patient',  '_sonata_name' => 'admin_users_users_patient_export',  '_route' => 'admin_users_users_patient_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/users/users/chambre')) {
                    // admin_users_users_chambre_list
                    if ($pathinfo === '/admin/users/users/chambre/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.chambre',  '_sonata_name' => 'admin_users_users_chambre_list',  '_route' => 'admin_users_users_chambre_list',);
                    }

                    // admin_users_users_chambre_create
                    if ($pathinfo === '/admin/users/users/chambre/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.chambre',  '_sonata_name' => 'admin_users_users_chambre_create',  '_route' => 'admin_users_users_chambre_create',);
                    }

                    // admin_users_users_chambre_batch
                    if ($pathinfo === '/admin/users/users/chambre/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.chambre',  '_sonata_name' => 'admin_users_users_chambre_batch',  '_route' => 'admin_users_users_chambre_batch',);
                    }

                    // admin_users_users_chambre_edit
                    if (preg_match('#^/admin/users/users/chambre/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_users_chambre_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.chambre',  '_sonata_name' => 'admin_users_users_chambre_edit',));
                    }

                    // admin_users_users_chambre_delete
                    if (preg_match('#^/admin/users/users/chambre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_users_chambre_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.chambre',  '_sonata_name' => 'admin_users_users_chambre_delete',));
                    }

                    // admin_users_users_chambre_show
                    if (preg_match('#^/admin/users/users/chambre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_users_chambre_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.chambre',  '_sonata_name' => 'admin_users_users_chambre_show',));
                    }

                    // admin_users_users_chambre_export
                    if ($pathinfo === '/admin/users/users/chambre/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.chambre',  '_sonata_name' => 'admin_users_users_chambre_export',  '_route' => 'admin_users_users_chambre_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/users/users/facture')) {
                    // admin_users_users_facture_list
                    if ($pathinfo === '/admin/users/users/facture/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.facture',  '_sonata_name' => 'admin_users_users_facture_list',  '_route' => 'admin_users_users_facture_list',);
                    }

                    // admin_users_users_facture_create
                    if ($pathinfo === '/admin/users/users/facture/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.facture',  '_sonata_name' => 'admin_users_users_facture_create',  '_route' => 'admin_users_users_facture_create',);
                    }

                    // admin_users_users_facture_batch
                    if ($pathinfo === '/admin/users/users/facture/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.facture',  '_sonata_name' => 'admin_users_users_facture_batch',  '_route' => 'admin_users_users_facture_batch',);
                    }

                    // admin_users_users_facture_edit
                    if (preg_match('#^/admin/users/users/facture/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_users_facture_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.facture',  '_sonata_name' => 'admin_users_users_facture_edit',));
                    }

                    // admin_users_users_facture_delete
                    if (preg_match('#^/admin/users/users/facture/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_users_facture_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.facture',  '_sonata_name' => 'admin_users_users_facture_delete',));
                    }

                    // admin_users_users_facture_show
                    if (preg_match('#^/admin/users/users/facture/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_users_facture_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.facture',  '_sonata_name' => 'admin_users_users_facture_show',));
                    }

                    // admin_users_users_facture_export
                    if ($pathinfo === '/admin/users/users/facture/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.facture',  '_sonata_name' => 'admin_users_users_facture_export',  '_route' => 'admin_users_users_facture_export',);
                    }

                }

            }

        }

        // facture_homepage
        if ($pathinfo === '/fh') {
            return array (  '_controller' => 'FactureBundle\\Controller\\DefaultController::indexAction',  '_route' => 'facture_homepage',);
        }

        // logout
        if ($pathinfo === '/Login') {
            return array (  '_controller' => 'FactureBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'logout',);
        }

        // facture_list
        if ($pathinfo === '/Factures') {
            return array (  '_controller' => 'FactureBundle\\Controller\\FactureController::ListAction',  '_route' => 'facture_list',);
        }

        // Contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'FactureBundle\\Controller\\ContactController::contactAction',  '_route' => 'Contact',);
        }

        // Dossier
        if ($pathinfo === '/DossierMedicale') {
            return array (  '_controller' => 'FactureBundle\\Controller\\DossierMedController::DossierAction',  '_route' => 'Dossier',);
        }

        // Admin
        if ($pathinfo === '/admins') {
            return array (  '_controller' => 'FactureBundle\\Controller\\AdminController::indexAction',  '_route' => 'Admin',);
        }

        // logoutadmin
        if ($pathinfo === '/Logoutadmin') {
            return array (  '_controller' => 'FactureBundle\\Controller\\AdminController::logoutAction',  '_route' => 'logoutadmin',);
        }

        // medicalist
        if ($pathinfo === '/medicament') {
            return array (  '_controller' => 'FactureBundle\\Controller\\AdminController::ListAction',  '_route' => 'medicalist',);
        }

        // medicadelete
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'medicadelete')), array (  '_controller' => 'FactureBundle\\Controller\\AdminController::DeleteAction',));
        }

        // medicaupdate
        if (0 === strpos($pathinfo, '/update') && preg_match('#^/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'medicaupdate')), array (  '_controller' => 'FactureBundle\\Controller\\AdminController::updateAction',));
        }

        // medicaajout
        if ($pathinfo === '/ajout') {
            return array (  '_controller' => 'FactureBundle\\Controller\\AdminController::ajoutAction',  '_route' => 'medicaajout',);
        }

        // medicapersist
        if ($pathinfo === '/persist') {
            return array (  '_controller' => 'FactureBundle\\Controller\\AdminController::persistAction',  '_route' => 'medicapersist',);
        }

        // mail_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mail_homepage')), array (  '_controller' => 'hopital\\MailBundle\\Controller\\DefaultController::indexAction',));
        }

        // my_app_mail_succ
        if ($pathinfo === '/succ') {
            return array (  '_controller' => 'hopital\\MailBundle\\Controller\\mailController::indexAction',  '_route' => 'my_app_mail_succ',);
        }

        // my_app_mail_form
        if ($pathinfo === '/mail') {
            return array (  '_controller' => 'hopital\\MailBundle\\Controller\\mailController::newAction',  '_route' => 'my_app_mail_form',);
        }

        // my_app_mail_sendpage
        if ($pathinfo === '/sendmail') {
            return array (  '_controller' => 'hopital\\MailBundle\\Controller\\mailController::sendMailAction',  '_route' => 'my_app_mail_sendpage',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
